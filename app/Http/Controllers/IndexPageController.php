<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexPageController extends Controller
{
        public function __construct()
        {

        }

    public function get()
    {
        return view('pages.index');
    }

    public function recall(Request $request)
    {
        $data = array('name' => $request->name, 'phone' => $request->phone);

        Mail::send('emails.mail', $data, function ($message) {
            $message->to('consul0652@gmail.com', 'To Ava-garant')->subject('Заказ звонка с сайта ava-garant.ru');
            $message->from('redchik091089@gmail.com', 'Ava-garant');
        });

        return 'Success send';

    }
}
