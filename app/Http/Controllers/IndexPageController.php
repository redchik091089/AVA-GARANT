<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Subcategory;

class IndexPageController extends Controller
{

        public function __construct()
        {

        }

    public function get()
    {
        return view('pages.index');
    }
}
