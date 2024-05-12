@extends('backend.app.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content-tab px-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-flex justify-content-between">
                        <div class="d-flex">
                            {{-- <a href="{{ url('dashboard/costumer') }}" class="btn btn-primary ">Kembali</a> --}}
                            <h4 class="page-title items-center mx-2 my-auto">Kategori & Jenis</h4>
                        </div>
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard/undangan') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard/costumer') }}">Costumer</a></li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </div>

                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <div class="row">
                <div class="col">
                    @if (session('message'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="mt-3">
                        <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addKategori"
                            onclick="showModal()"> <i class="mdi mdi-plus"></i> Kategori / Jenis</button>
                    </div>
                </div>
            </div>
            @include('backend.ui-modal.modalKategori')


            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Kategori</h4>

                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="tableCos">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 10%;">No</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($kategory as $key => $kat)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $kat->kategory }}</td>
                                                <td>KATEGORI</td>
                                                <td><a href="{{ url('dashboard/delete/' . $kat->uuid) }}"
                                                        class="btn btn-danger sweetdelete"><i
                                                            class="mdi mdi-delete"></i></a>
                                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#upUndanganCetak"><i
                                                            class="mdi mdi-pencil"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @foreach ($jenis as $key => $jen)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $jen->jenis }}</td>
                                                <td>JENIS</td>
                                                <td><a href="{{ url('dashboard/delete/' . $jen->uuid) }}"
                                                    class="btn btn-danger sweetdelete"><i
                                                        class="mdi mdi-delete"></i></a>
                                                <button class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#upUndanganCetak"><i
                                                        class="mdi mdi-pencil"></i></button></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
@endsection
