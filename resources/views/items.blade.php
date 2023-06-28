@extends('templates/default')


@section('content')
                    <!-- Page Heading -->
                    <div class="page-heading d-flex justify-content-between mx-4 mb-2">
                        <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Barang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Kode Barang</th>
                                            <th>Gambar Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Stok Awal</th>
                                            <th>Harga</th>
                                            <th>Barang Masuk</th>
                                            <th>Barang Keluar</th>
                                            <th>Stok Akhir</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)          
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->code->kode_barang }}</td>
                                            <td>
                                                {{ $item->gambar_barang }}
                                            </td>
                                            <td>{{ $item->code->nama_barang }}</td>
                                            <td>{{ $item->stok_awal }}</td>
                                            <td>{{ $item->code->harga }}</td>
                                            <td>{{ $item->barang_masuk }}</td>
                                            <td>{{ $item->barang_keluar }}</td>
                                            <td>{{ $item->stok_akhir }}</td>     
                                            <td>
                                                <div>
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection