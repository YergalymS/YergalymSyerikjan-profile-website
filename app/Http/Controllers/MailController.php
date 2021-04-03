<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function send() {
        $objectDemo = new \stdClass();
        // $objectDemo -> reciever = 'Yergalym';
        // $objectDemo -> sender = 'Yergalym';
        Mail::to('190103213@stu.sdu.edu.kz')->send(new DemoMail($objectDemo));
    }
}
