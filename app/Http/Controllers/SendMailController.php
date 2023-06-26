<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    function sendMail() {
        $email = User::select('email')->get();
        $data = [
            'email' => $email //người nhân
        ];
        dispatch(new SendMailJob($data));
    }
}
