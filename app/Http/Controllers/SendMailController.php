<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    function sendMail() {
        $data = [
            'email' => 'phanthanhthuy16112k@gmail.com',
            'name' => 'phanthanhthuy'
        ];
        
        dispatch(new SendMailJob($data));
    }
}
