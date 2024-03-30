@extends('backend.app.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active">Costumer</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Costumer</h4>
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
                        <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addCostumer"
                            onclick="showModal()"> <i class="mdi mdi-plus"></i> Tambah</button>
                    </div>
                    @include('backend.ui-modal.modalCostumer')
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Costumer Table </h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="tableCos">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 10%;">No</th>
                                            <th>Nama</th>
                                            <th>Nomor Hp</th>
                                            <th>Alamat</th>
                                            <th>Badan Usaha</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($costumer as $index => $cos)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $cos->name }}</td>
                                                <td>{{ $cos->nomor }}</td>
                                                <td>{{ $cos->alamat }}</td>
                                                <td>{{ $cos->badan_usaha }}</td>
                                                <td>
                                                    {{-- <form action="{{ url('/dashboard/costumer/detail/'. $cos->uuid) }}" method="get">
                                                        <button class="btn btn-secondary" type="submit">
                                                            <i class="mdi mdi-eye"></i>
                                                        </button>
                                                    </form> --}}
                                                    <a href="{{url('/dashboard/costumer/detail/'. $cos->uuid)}}" class="btn btn-secondary"><i
                                                            class="mdi mdi-eye"></i></a>
                                                    <a href="{{ url('/dashboard/delete-costumer/' . $cos->uuid) }}"
                                                        class="btn btn-danger sweetdelete"><i
                                                            class="mdi mdi-delete"></i></a>
                                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                                        data-uid="{{ $cos->uuid }}" data-name="{{ $cos->name }}"
                                                        data-nomor="{{ $cos->nomor }}" data-alamat="{{ $cos->alamat }}"
                                                        data-usaha="{{ $cos->badan_usaha }}"
                                                        data-bs-target="#upCostumer"><i class="mdi mdi-pencil"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach

                                        @include('backend.ui-modalUpdate.updateCostumer')

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
