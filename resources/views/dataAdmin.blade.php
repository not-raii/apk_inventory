@extends('templates/default')


@section('content')

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($dataAdmin as $d)     
                                        <tr>
                                            <td class="number">{{ $no++ }}.</td>
                                            <td class="text-capitalize">{{ $d->name }}.</td>
                                            <td class="text-capitalize">{{ $d->email }}</td>
                                            <td class="text-capitalize">{{ $d->role }}</td>
                                        </tr>
                                        @endforeach                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            
@endsection