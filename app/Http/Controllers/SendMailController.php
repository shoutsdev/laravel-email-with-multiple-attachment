<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail()
    {
        $files = [
            public_path('files/160031367318.pdf'),
            public_path('files/1599882252.png'),
        ];

        $details = [
            'title' => 'Mail from shouts.dev',
            'body' => 'This is a test email using Google SMTP',
            'files' => $files
        ];

        Mail::to('16103119@iubat.edu')->send(new SendMail($details));

        dd("Mail Sent Successfully.");
    }
}
