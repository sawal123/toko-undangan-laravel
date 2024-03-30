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
                            <h4 class="page-title">Undangan Cetak</h4>
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
                                <h4 class="card-title">Undangan Cetak</h4>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="myTable">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="width: 10%;">No</th>
                                                <th style="width: 20%">Gambar</th>
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
                                                    <td style="overflow-x: scroll;" class="d-flex justify-content-evenly">
                                                        @php
                                                            $arr = [];
                                                        @endphp
                                                        @foreach ($galery as $gal)
                                                            @if ($gal->undangan_uuid === $item->uuid)
                                                                @php
                                                                    $arr[] = $gal->gambar;
                                                                @endphp
                                                                <style>
                                                                    .image-container {
                                                                        position: relative;
                                                                        display: inline-block;
                                                                        /* overflow-x: scroll */
                                                                    }
                                                                    .close-button {
                                                                        position: absolute;
                                                                        top: 5px;
                                                                        right: 5px;
                                                                        background-color: red;
                                                                        border: none;
                                                                        border-radius: 50%;
                                                                        width: 30px;
                                                                        height: 30px;
                                                                        color: rgb(255, 255, 255);
                                                                        font-size: 20px;
                                                                        cursor: pointer;
                                                                        padding: 0;
                                                                        /* Hapus padding */
                                                                        z-index: 1;
                                                                        /* Pastikan tombol silang di atas gambar */
                                                                        transform: translate(50%, -50%);
                                                                        /* Geser tombol silang ke sudut yang tepat */
                                                                    }
                                                                </style>
                                                                <div class="image-container">
                                                                    <img class="rounded ms-2" width="40px"
                                                                        src="{{ asset('storage/undangancetak/' . $gal->gambar) }}"
                                                                        alt="">
                                                                    <form action="{{ url('dashboard/delImg') }}"
                                                                        method="post" enctype="multipart/form-data" class="delete-form">
                                                                        @csrf
                                                                        <input type="hidden" name="uidImage"
                                                                            value="{{ $gal->id }}">
                                                                            <button type="submit" class="close-button " id="sweetdelete" data-message="Yakin Hapus Gambar?"
                                                                            data-confirm-text="Yes, delete it!">&times;</button>
                                                                    </form>
                                                                </div>
                                                            @endif
                                                        @endforeach

                                                     
                                                    </td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->jenis }}</td>
                                                    <td>{{ $item->kategory }}</td>
                                                    <td>{{ $item->stok }}</td>
                                                    <td>{{ $item->terjual }}</td>
                                                    <td>Rp {{ $item->harga }}</td>
                                                    <td>
                                                        <a href="{{ url('dashboard/delete/' . $item->uuid) }}"
                                                            class="btn btn-danger sweetdelete"><i
                                                                class="mdi mdi-delete"></i></a>
                                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                                            data-name="{{ $item->name }}"
                                                            data-jenis="{{ $item->jenis }}"
                                                            data-kategori="{{ $item->kategory }}"
                                                            data-stok='{{ $item->stok }}'
                                                            data-terjual="{{ $item->terjual }}"
                                                            data-deskripsi="{{ $item->deskripsi }}"
                                                            data-harga="{{ $item->harga }}" data-uuid={{ $item->uuid }}
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
