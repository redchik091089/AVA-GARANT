<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use phpDocumentor\Reflection\Types\True_;

class SubcategoryController extends Controller
{
    public function getSubProds($id)
    {
        $cat_id = Subcategory::find($id)->category_id;
        $sub_cat = Subcategory::find($id);

        if($cat_id == 1)
            return view('pages.potolki', ['potolki' => $sub_cat->products]);

            return view('pages.products', ['products' => $sub_cat->products, 'title' => $sub_cat-> subcat_name ]);

    }

    public function getSubProdByType($id, $type)
    {
        $sub_cat = Subcategory::find($id);

        if( $type == 'system_rulon' and $sub_cat->rulon_shtor == 'открытая система')
            return view('pages.products', ['products' => $sub_cat->products->where('open_system', true), 'title' => $sub_cat-> subcat_name . ' - ' . $sub_cat->rulon_shtor ]);

        if( $type == 'system_gor' and $sub_cat->gor_galuzi == 'коробовая система')
            return view('pages.products', ['products' => $sub_cat->products->where('open_system', false), 'title' => $sub_cat-> subcat_name . ' - ' . $sub_cat->gor_galuzi ]);

        if( $type == 'system_rulon' and $sub_cat->rulon_shtor == 'стандартные')
            return view('pages.products', ['products' => $sub_cat->products->where('standart', true), 'title' => $sub_cat-> subcat_name . ' - ' . $sub_cat->rulon_shtor ]);

        if( $type == 'system_gor' and $sub_cat->gor_galuzi == 'штапиковые')
        return view('pages.products', ['products' => $sub_cat->products->where('standart', false), 'title' => $sub_cat-> subcat_name . ' - ' . $sub_cat->gor_galuzi ]);

        return back()->with('msg', 'Шторы не найдены!');

    }
}
