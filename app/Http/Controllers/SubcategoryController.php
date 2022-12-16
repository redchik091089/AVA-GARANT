<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Product;
use phpDocumentor\Reflection\Types\True_;

class SubcategoryController extends Controller
{
    public function getSubProds($id)
    {
        $cat_id = Subcategory::find($id)->category_id;
        $sub_cat = Subcategory::find($id);

        if($id == 22) {
            $sub_cat = Subcategory::find(21);
            return view('pages.products', ['products' => $sub_cat->products()->paginate(12), 'title' => 'Полупромышленные' ]);
        }

        if($id == 20) {
            $sub_cat = Subcategory::find(19);
            return view('pages.products', ['products' => $sub_cat->products()->paginate(12), 'title' => 'Мобильные' ]);
        }

        if($id == 23) {
            $sub_cat = Subcategory::find(19);
            return view('pages.products', ['products' => $sub_cat->products()->paginate(12), 'title' => 'Потолочные' ]);
        }

        if($cat_id == 1)
            return view('pages.potolki', ['potolki' => $sub_cat->products()->paginate(12)]);


        if($id == 32)
            return view('pages.single_product', ['product' => Product::find(286)]);

        if($id == 33)
            return view('pages.single_product', ['product' => Product::find(287)]);

        if($id == 34)
            return view('pages.single_product', ['product' => Product::find(288)]);

        if($id == 35)
            return view('pages.single_product', ['product' => Product::find(289)]);

            return view('pages.products', ['products' => $sub_cat->products()->paginate(12), 'title' => $sub_cat-> subcat_name ]);

    }

    public function getSubProdByType($id, $type)
    {
        $sub_cat = Subcategory::find($id);

        if( $type == 'system_rulon' and $sub_cat->rulon_shtor == 'открытая система')
            return view('pages.products', ['products' => $sub_cat->products()->where('open_system', true)->paginate(12), 'title' => $sub_cat-> subcat_name . ' - ' . $sub_cat->rulon_shtor ]);

        if( $type == 'system_gor' and $sub_cat->gor_galuzi == 'коробовая система')
            return view('pages.products', ['products' => $sub_cat->products()->where('open_system', true)->paginate(12), 'title' => $sub_cat-> subcat_name . ' - ' . $sub_cat->gor_galuzi ]);

        if( $type == 'system_rulon' and $sub_cat->rulon_shtor == 'стандартные')
            return view('pages.products', ['products' => $sub_cat->products()->where('standart', true)->paginate(12), 'title' => $sub_cat-> subcat_name . ' - ' . $sub_cat->rulon_shtor ]);

        if( $type == 'system_gor' and $sub_cat->gor_galuzi == 'штапиковые')
        return view('pages.products', ['products' => $sub_cat->products()->where('standart', true)->paginate(12), 'title' => $sub_cat-> subcat_name . ' - ' . $sub_cat->gor_galuzi ]);

        return back()->with('msg', 'Шторы не найдены!');

    }
}
