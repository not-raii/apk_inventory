@extends('templates/default')


@section('table')
                    <!-- Page Heading -->
                    <div class="page-heading d-flex justify-content-between mx-4 mb-2">
                        <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
                        <button class="btn btn-success">+ Tambah</button>
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
                                        <tr>
                                            <td>1. </td>
                                            <td>06/12/2023</td>
                                            <td>AA0B3</td>
                                            <td>
                                                <img src="" alt="">
                                            </td>
                                            <td>Komputer</td>
                                            <td>10</td>
                                            <td>Rp. 100,000</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>7</td>
                                            <td>
                                                <div>
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1. </td>
                                            <td>06/12/2023</td>
                                            <td>AA0B3</td>
                                            <td>
                                                <img src="" alt="">
                                            </td>
                                            <td>10</td>
                                            <td>Rp. 100,000</td>
                                            <td>2</td>
                                            <td>5</td>
                                            <td>7</td>
                                            <td>
                                                <div>
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
@endsection