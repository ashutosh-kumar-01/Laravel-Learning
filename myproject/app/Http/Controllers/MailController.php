<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    public function sendEmail()
    {
        try {
            $to = "ashusinghby2006@gmail.com";
            $subject = "Welcome to Our Website";
            $message = "Thank you for signing up for our website. We are glad to have";
            Mail::to($to)->send(new WelcomeEmail($subject, $message));
            return "Email sent successfully!";
        } catch (\Exception $e) {
            return "Error sending email: " . $e->getMessage();
        }
    }
}
