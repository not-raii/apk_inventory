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
        $data = Codes::sortable()->paginate(2)->onEachSide(2);

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
        $kode = $request->kode_barang;
        $nama = $request->nama_barang;
        $kategori = $request->id_categories;

         $request->validate([
            'kode_barang' => 'required|max:5',
            'nama_barang' => 'required',
            'gambar_barang' => 'image|file|max:2048',
        ],[
            'kode_barang.required' => 'Kode barang tidak boleh kosong',
            'nama_barang.required' => 'Nama barang tidak boleh kosong',
        ]);

        if($request->hasfile('gambar_barang')){
            $path = $request->file('gambar_barang')->store('gambarBarang');
        }else{
            $path = '';
        }

        $code = new Codes;
        $code->kode_barang = $kode;
        $code->gambar_barang = $path;
        $code->nama_barang = $nama;
        $code->id_categories = $kategori;
        $code->save();


        $request->session()->flash('message', 'Kode barang berhasil ditambahkan');
            return redirect('kode_barang')->with('success', 'Data berhasil di tambahkan');
    }

    // Function Hapus
    public function hapus($id)
    {
        $kategori = Codes::find($id);
        $kategori->delete();
        return redirect('kode_barang')->with('success', 'Data berhasil di hapus');

    }

    public function edit($kode)
    {
        $d = Codes::find($kode);
        // $kategori = Category::select('id', 'nama_kategori')->get();
        $data = [
            'kode_barang' => $d->kode_barang,
            'gambar_barang' => $d->gambar_barang,
            'nama_barang' => $d->nama_barang,
            'id_categories' => $d->id_categories,
        ];


        return view('data/edit_codes', $data,
        [
            "title" => "Edit Kode Barang",
        ]);
    }
}
