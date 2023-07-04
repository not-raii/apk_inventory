<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function kategori()
    {
        $data = Category::paginate(5);
        return view('categories', compact('data'),
        [
            "title" => "Kategori"
        ]);
    }

    //Function Tambah
    public function tambah()
    {
        $kategori = Category::select('nama_kategori')->get();
        return view('data/add_categories',
        [
            "title" => "Tambah Kategori Barang",
            "kategori" => $kategori
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ],[
            'nama_kategori.required' => 'Kategori tidak boleh kosong',
        ]);

        $kode=Category::create($request->all());
            return redirect('kategori')->with('success', 'Data berhasil di tambahkan');
    }

    // Function Hapus
    public function hapus($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect('kategori')->with('success', 'Data berhasil di hapus');

    }
}
