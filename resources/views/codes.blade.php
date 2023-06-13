@extends('templates/default')


@section('content')
                    <!-- Page Heading -->
                    <div class="page-heading d-flex justify-content-between mx-4 mb-2">
                        <h1 class="h3 mb-2 text-gray-800">Kode Barang</h1>
                        <button class="btn btn-success">+ Tambah</button>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kode Barang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Barang</th>
                                            <th>Nama</th>
                                            <th>Jumlah</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $kode)    
                                        <tr>
                                            <td class="number">{{ $kode->id }}.</td>
                                            <td class="text-capitalize">{{ $kode->kode_barang }}</td>
                                            <td class="text-capitalize">{{ $kode->nama_barang }}</td>
                                            <td class="text-capitalize">{{ $kode->jumlah_barang }}</td>
                                            <td class="text-capitalize">{{ $kode->categories }}</td>
                                            <td>
                                                <div>
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