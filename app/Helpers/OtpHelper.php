<?php

namespace App\Helpers;

use App\Models\Otp;
use Carbon\Carbon;

class OtpHelper
{
    protected $key_length, $expire_at, $token_length;

    public function __construct()
    {
        $this->key_length = 6;
        $this->token_length = 6;
        $this->expire_at = 5;
    }

    public function generate()
    {
        $data = [
            'key' => $this->generateKey(),
            'token' => $this->generateToken(),
            'expires_at' => now()->addRealMinutes($this->expire_at)
        ];
        return Otp::create($data);
    }

    public function verify(string $key, string $token, $timeCheck = true)
    {
        $otp = Otp::where('key', $key)->where('token', $token)->where('used', 0)->first();
        if (!$otp) return false;
        if ($timeCheck) {
            if (false === Carbon::parse($otp->expires_at)->isAfter(now())) return 'expired';
        }
        $otp->delete();
        return true;
    }

    protected function generateKey()
    {
        return $this->getData('key');
    }

    protected function generateToken()
    {
        return $this->getData('token');
    }

    private function getData($field = 'key')
    {
        $key = randomNumber($this->{$field . "_length"});
        while (Otp::where($field, $key)->exists()) $key = randomNumber($this->{$field . "_length"});
        return $key;
    }

    public function cleanTokens()
    {
        Otp::whereDate('expires_at', '<', now()->toDateString())->orWhere('used', 1)->delete();
    }
}
