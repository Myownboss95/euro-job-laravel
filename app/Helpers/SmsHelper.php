<?php

namespace App\Helpers;

use Throwable;
use MessageBird\Client;
use MessageBird\Objects\Message;
use Illuminate\Support\Facades\Log;
use MessageBird\Objects\VoiceMessage;

class SmsHelper
{
    protected $messagebird;
    private $from, $phone;

    public function __construct()
    {
        $this->from = config('sms.from');
        $this->phone = config('sms.messagebird.phone');

        $this->messagebird = new Client(config('sms.messagebird.key'));
    }

    public function send($to, string $body) : bool
    {
        try {
            $message = new Message();
            $message->originator = $this->from;
            $message->recipients = $to;
            $message->body = $body;
            $this->messagebird->messages->create($message);
            return true;
        } catch (Throwable $th) {
            Log::error($th->getMessage());
            return false;
        }
    }

    public function call($to, $message) : bool
    {
        try {
            $VoiceMessage = new VoiceMessage();
            $VoiceMessage->originator = $this->phone;
            $VoiceMessage->body = $message;
            $VoiceMessage->recipients = $to;
            $VoiceMessage->language = 'en-gb';
            $VoiceMessage->voice = 'male';
            $this->messagebird->voicemessages->create($VoiceMessage);
            return true;
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return false;
        }
    }
}
