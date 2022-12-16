<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;

class ProductController extends Controller
{
    protected $id_collection = [];

    public function getAll()
    {
        return view('pages.products', ['products' => Product::paginate(15), 'title' => 'Каталог']);
    }

    public function getOne($id)
        {
            return view('pages.single_product', ['product' => Product::find($id), 'title' => 'Продукт']);
        }

    public function shtori($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get();
        foreach ($subcategories as $item) {
            $this->id_collection[] = $item->id;
        }
        $shtori = Product::whereIn('subcategory_id', $this->id_collection)->paginate(15);

        return view('pages.shtori', ['shtori' => $shtori, 'title' => 'Рулонные шторы']);
    }

    public function condizionery($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get();
        foreach ($subcategories as $item) {
            $this->id_collection[] = $item->id;
        }
        $condizionery = Product::whereIn('subcategory_id', $this->id_collection)->paginate(15);

        return view('pages.condizionery', ['condizionery' => $condizionery, 'title' => 'Кондиционеры']);
    }

    public function svetilniki($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get();
        foreach ($subcategories as $item) {
            $this->id_collection[] = $item->id;
        }
        $svetilniki = Product::whereIn('subcategory_id', $this->id_collection)->paginate(15);

        return view('pages.svetilniki', ['svetilniki' => $svetilniki, 'title' => 'Светильники']);
    }

    public function uslugi($id)
    {
        $subcategories = Subcategory::where('category_id', $id)->get();
        foreach ($subcategories as $item) {
            $this->id_collection[] = $item->id;
        }
        $uslugi = Product::whereIn('subcategory_id', $this->id_collection)->paginate(15);

        return view('pages.uslugi', ['uslugi' => $uslugi, 'title' => 'Услуги по строительству']);
    }
}
