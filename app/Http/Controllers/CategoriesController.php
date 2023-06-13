<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function kategori()
    {
        $data = Category::all();
        return view('categories', compact('data'),
        [
            "title" => "Kategori"
        ]);
    }
}
