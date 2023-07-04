@extends('templates/default')

@section('content')
<!-- Page Heading -->
<div class="page-heading d-flex justify-content-between mx-4 mb-2">
    <h1 class="h3 mb-2 text-gray-800">Kode Barang</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Kode Barang</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <form action="kode_barang" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode Barang</label>
                    <input name="kode_barang" type="text"
                        class="form-control @error('kode_barang') is-invalid @enderror" id="kode" placeholder="ABCDE"
                        value="{{ old('kode_barang') }}">
                    @error('kode_barang')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumlah">Gambar Barang</label>
                    <input name="gambar_barang" type="file"
                        class="form-control @error('gambar_barang') is-invalid @enderror" id="gambar" accept="image/*">
                    @error('gambar_barang')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input name="nama_barang" type="text"
                        class="form-control @error('nama_barang') is-invalid @enderror" id="nama" placeholder="ASUS"
                        value="{{ old('nama_barang') }}">
                    @error('nama_barang')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="id_categories" class="form-control" id="kategori">
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategori as $item)
                            @if(old('id_categories') == $item->id)
                                <option value="{{ $item->id }}" selected> {{ $item->nama_kategori }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-between mx-2">
                    <a class="btn btn-info" href="kode_barang"> Kembali </a>
                    <button class="btn btn-success" href="kode_barang_add" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection
