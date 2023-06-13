<?php

namespace App\Http\Controllers;

use App\Models\Codes;
use Illuminate\Http\Request;

class CodesController extends Controller
{
    public function kode()
    {

        $data = Codes::with('categories')->paginate(10);
        // return $data;
        return view('codes', compact('data'),
        [
            "title" => "Kode Barang"
        ]);
    }
}
