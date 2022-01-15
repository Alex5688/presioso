<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function products($categoryId=0)
    {


        $categories = Category::get();



        if($categoryId){
            $products = Product::where('category_id', $categoryId);
        } else {
            $products = Product::latest();
        }

        return view('/products', [
            'products' => $products->paginate(9),
            'categories' => $categories,
            'categoryId' => $categoryId
        ]);
    }
}
