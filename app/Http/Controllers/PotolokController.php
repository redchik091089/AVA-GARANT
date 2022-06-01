<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class PotolokController extends Controller
{
    protected $id_collection = [];

    public function __construct()
        {

        }
    public function potolki($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get();
        foreach ($subcategories as $item) {
                $this->id_collection[] = $item->id;
        }
        $potolki = Product::whereIn('subcategory_id', $this->id_collection)->paginate(3);

        return view('pages.potolki', ['potolki' => $potolki]);

    }
}
