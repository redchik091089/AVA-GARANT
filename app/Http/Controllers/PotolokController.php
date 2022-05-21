<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Potolok;

class PotolokController extends Controller
{
        public function __construct()
        {

        }

    public function get()
    {
        return view('pages.potolki', ['potolki' => Potolok::all()]);
    }
}
