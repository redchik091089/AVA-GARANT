<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;

class ProductController extends Controller
{
    protected $collection = [];

    public function getAll()
    {
        return view('pages.products', ['products' => Product::all(), 'title' => 'Каталог']);
    }

    public function potolki($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get();
        foreach ($subcategories as $item) {
            $products = Product::where('subcategory_id', $item->id)->get();
            foreach ($products as $product) {
                $this->collection[] = $product;
            }
        }
        $potolki = collect($this->collection);

        return view('pages.potolki', ['potolki' => $potolki]);

    }
    public function shtori($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get();
        foreach ($subcategories as $item) {
            $products = Product::where('subcategory_id', $item->id)->get();
            foreach ($products as $product) {
                $this->collection[] = $product;
            }
        }
        $shtori = collect($this->collection);

        return view('pages.shtori', ['shtori' => $shtori, 'title' => 'Рулонные шторы']);
    }

    public function condizionery($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get();
        foreach ($subcategories as $item) {
            $products = Product::where('subcategory_id', $item->id)->get();
            foreach ($products as $product) {
                $this->collection[] = $product;
            }
        }
        $condizionery = collect($this->collection);

        return view('pages.condizionery', ['condizionery' => $condizionery, 'title' => 'Кондиционеры']);
    }

    public function svetilniki($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get();
        foreach ($subcategories as $item) {
            $products = Product::where('subcategory_id', $item->id)->get();
            foreach ($products as $product) {
                $this->collection[] = $product;
            }
        }
        $svetilniki = collect($this->collection);

        return view('pages.svetilniki', ['svetilniki' => $svetilniki, 'title' => 'Светильники']);
    }
}
