<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function barang()
    {
        return view('items', 
        [
            "title" => "Data Barang"
        ]);
    }
    
}
