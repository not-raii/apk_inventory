<?php

namespace App\Http\Controllers;

use App\Models\Supplies;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function barang()
    {
        $data = Supplies::paginate(10);
        return view('items', compact('data'),
        [
            "title" => "Data Barang"
        ]);
    }
    
}
