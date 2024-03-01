@extends('backend.app.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container mb-5">


                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Metrica</a></li>
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Datatables</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Datatables</h4>
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>


                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <div class="mt-3">
                            <button class="btn btn-primary " > <i class="mdi mdi-plus"></i> Tambah</button>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Export Table </h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="myTable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Nama</th>
                                                <th>Jenis</th>
                                                <th>Kategori</th>
                                                <th>Stok</th>
                                                <th>Terjual</th>
                                                <th>action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <img class="rounded" width="40px" src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//96/MTA-61495521/no-brand_undangan-blangko-erba-88199_full01.jpg" alt="">
                                                </td>
                                                <td>Lintang 31</td>
                                                <td>Lintang</td>
                                                <td>Undangan Cetak</td>
                                                <td>37</td>
                                                <td>371</td>
                                                <td>
                                                    <button class="btn btn-danger"><i class="mdi mdi-delete"></i></button>
                                                    <button class="btn btn-primary"><i class="mdi mdi-pencil"></i></button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div>
    </div>

@endsection
