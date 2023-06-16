<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Codes;
use Illuminate\Http\Request;

class CodesController extends Controller
{
    public function kode(Request $request)
    {
        $kategori = Category::query()->select('id', 'nama_kategori')->get();
        $data = Codes::paginate(10);

        $kategori->when($request->nama_kategori, function ($query) use ($request){
            return $query->whereCategory($request->nama_kategori);
        });

        return view('/codes', compact('data'),
        [
            "title" => "Kode Barang",
            "kategori" => $kategori

        ]);
    }

    // Function Tambah
    public function tambah()
    {
        $kategori = Category::select('id', 'nama_kategori')->get();
        return view('data/add_codes',
        [
            "title" => "Tambah Kode Barang",
            "kategori" => $kategori
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|min:5',
            'nama_barang' => 'required',
            'jumlah_barang' => 'required',
        ],[
            'kode_barang.required' => 'Kode barang tidak boleh kosong',
            'nama_barang.required' => 'Nama barang tidak boleh kosong',
            'jumlah_barang.required' => 'Jumlah barang tidak boleh kosong',
        ]);

        $kode=Codes::create($request->all());
            return redirect('kode_barang')->with('success', 'Data berhasil di tambahkan');
    }

    // Function Hapus
    public function hapus($id)
    {
        $kategori = Codes::find($id);
        $kategori->delete();
        return redirect('kode_barang')->with('success', 'Data berhasil di hapus');

    }
}
