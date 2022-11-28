<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function DetailCategory($id){
        $category = categories::find($id);
        $categories = categories::all();
        return view('category', ['category' => $category, 'categories'=>$categories,'tittle'=>'category']);
    }

    public function Contact(){
        $categories = categories::all();
        return view('contact', ['categories'=>$categories,'tittle'=>'contact']);
    }
}
