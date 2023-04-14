<?php

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Str;

function logo()
{
    return asset(config('dir.logo'));
}

function favicon()
{
    return asset(config('dir.logo'));
}

function profile_picture()
{
    $image = 'default.png';
    if($user = auth('user')->user()){
        $image = $user->image;
    }
    return asset(config('dir.profile').$image);
}

function admin_domain()
{
    return config('domain.admin');
}

function user_domain()
{
    return config('domain.user');
}

function front_domain()
{
    return config('domain.front');
}

function randomNumber($length = 10)
{
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $random = '';
    for ($i = 0; $i < $length; $i++) {
        $random .= $characters[rand(0, $charactersLength - 1)];
    }
    return $random;
}

function generateAccountNumber()
{
    $account_number = randomNumber();
    while (User::where('account_number', $account_number)->exists()) {
        $account_number = randomNumber();
    }
    return $account_number;
}

function generateReference($length = 10)
{
    $reference = Str::random($length);
    while (Transaction::where('reference', $reference)->exists()) {
        $reference = Str::random($length);
    }
    return $reference;
}

function statusColor($s)
{
    if($s == 'active'){
        $status = 'success';
    }elseif($s == 'inactive'){
        $status = 'danger';
    }elseif($s == 'dormant'){
        $status = 'info';
    }else{
        $status = 'warning';
    }
    return $status;
}
