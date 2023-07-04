@extends('templates/default')


@section('content')
<!-- Page Heading -->
<div class="page-heading d-flex justify-content-between mx-4 mb-2">
    <h1 class="h3 mb-2 text-gray-800">Kode Barang</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="font-weight-bold text-primary mt-2 ml-2">Data Kode Barang</h6>
        <div class="d-flex">
                <div>
                    <a class="btn btn-success" href="add">+ Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">


             <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>@sortablelink('kode_barang','Kode Barang')</th>
                        <th>Gambar</th>
                        <th>@sortablelink('nama_barang','Nama')</th>
                        <th>@sortablelink('nama_kategori','Kategori')</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1 + (($data->currentPage()-1) * $data->perPage());
                    @endphp
                    @foreach ($data as $kode)
                    <tr>
                        <td class="number">{{ $no++ }}.</td>
                        <td class="text-uppercase">{{ $kode->kode_barang }}</td>
                        <td class="img-fluid">
                            <img src="{{ asset('storage/' . $kode->gambar_barang) }}" class="img-thumbnail" width="50%" height="50%" alt="img">
                        </td>
                        <td class="text-capitalize">{{ $kode->nama_barang }}</td>
                        <td class="text-capitalize">{{ $kode->categories->nama_kategori }}</td>
                        <td>
                            <div>
                                <a href="edit" class="btn btn-info">Edit</a>
                                <a href="/delete_code/{{ $kode->id }}" class="btn btn-danger">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {!! $data->appends(Request::except('page'))->render() !!}
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection
