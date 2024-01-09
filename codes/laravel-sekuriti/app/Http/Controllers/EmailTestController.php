<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

class EmailTestController extends Controller
{
    public function sendTestEmail()
    {
        $recipient = 'agusk2007@gmail.com';  // Ganti dengan alamat email penerima
        Mail::to($recipient)->send(new TestEmail());

        return "Email has been sent to {$recipient}";
    }
}
