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
                            <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addundangancetak"
                                onclick="showModal()"> <i class="mdi mdi-plus"></i> Tambah</button>
                        </div>
                    </div>
                </div>
                @include('backend.ui-modal.modaladdundangan')

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
                                                <th>Harga</th>
                                                <th>action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($undangan as $index => $item)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        @php
                                                            $arr = [];
                                                        @endphp
                                                        @foreach ($galery as $gal)
                                                            @if ($gal->undangan_uuid === $item->uuid)
                                                                @php
                                                                    $arr[] = $gal->gambar;
                                                                @endphp
                                                            @endif
                                                        @endforeach
                                                        @if ($arr)
                                                            <img class="rounded" width="40px"
                                                                src="{{ asset('storage/undangancetak/' . $arr[0]) }}"
                                                                alt="">
                                                        @else
                                                            <img class="rounded" width="40px"
                                                                src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                                alt="">
                                                        @endif

                                                    </td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->jenis }}</td>
                                                    <td>{{ $item->kategori_undangan }}</td>
                                                    <td>{{ $item->stok }}</td>
                                                    <td>{{ $item->terjual }}</td>
                                                    <td>Rp {{ $item->harga }}</td>
                                                    <td>
                                                        <a href="{{ url('dashboard/delete/' . $item->uuid) }}"
                                                            class="btn btn-danger sweetdelete"><i
                                                                class="mdi mdi-delete"></i></a>

                                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target="#upUndanganCetak"><i
                                                                class="mdi mdi-pencil"></i></button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @include('backend.ui-modalUpdate.updateUndangan')

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
