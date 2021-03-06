<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;


class MailController extends Controller
{   
    public function view() {
        return view('contact');
    }
    public function send(Request $request){
        
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'file' => 'required|file',
            'message' => 'required'
        ]);
        
        // dd(request()->all());
        Mail::to('190103213@stu.sdu.edu.kz')->send(new DemoMail($data));

        return redirect('en/contact');
    }
    
}
