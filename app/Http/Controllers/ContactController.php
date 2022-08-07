<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function get()
    {
        return view('pages.contact');
    }

    public function sendToUs(Request $request)
    {
        
        $data = array('name' => $request->name, 'phone' => $request->phone, 'text' => $request->message);
    

        Mail::send('emails.mail_us', $data, function ($message) {
            $message->to('consul0652@gmail.com', 'To Ava-garant')->subject('Заказ звонка с сайта ava-garant.ru');
            $message->from('redchik091089@gmail.com', 'Ava-garant');
        });

        return view('pages.contact');

    }
}
