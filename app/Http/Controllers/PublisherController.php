<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\publishers;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function Publishers() {
        $publishers = publishers::all();
        $categories = categories::all();
        return view('publisher', ['publishers' => $publishers, 'categories'=>$categories,'tittle'=>'publisher']);
    }
}
