<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\categories;
use App\Models\publishers;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function home() {
        $books = books::all();
        $categories = categories::all();
        return view('home', ['book'=>$books, 'categories'=>$categories ,'tittle'=>'home']);
    }

    public function Detail($id){
        $books = books::find($id);
        $categories = categories::all();
        return view('detail', ['book' => $books, 'categories'=>$categories, 'tittle'=>'detail']);
    }
}
