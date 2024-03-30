@extends('backend.app.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content-tab px-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-flex justify-content-between">
                        <div class="d-flex">
                            {{-- <a href="{{ url('dashboard/costumer') }}" class="btn btn-primary ">Kembali</a> --}}
                            <h4 class="page-title items-center mx-2 my-auto">Transaksi</h4>
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
                        <a href="{{url('dashboard/transaksi/create')}}" class="btn btn-primary " 
                   > <i class="mdi mdi-plus"></i>Buat Transaksi</a>
                    </div>
                    {{-- @include('backend.ui-modal.modalCostumer') --}}
                </div>
            </div>


            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">5 Transaksi</h4>
                            <div class="container" style="width: 50%">
                                <div class="row g-2">
                                    <div class="col">
                                        <label for="tanggal">Pilih Tanggal:</label>
                                        <select name="tanggal" id="tanggal" class="form-select"></select>
                                    </div>
                                    <div class="col">
                                        <label for="bulan">Pilih Bulan:</label>
                                        <select name="bulan" id="bulan" class="form-select">
                                            
                                            @foreach ($bulan as $index=>$month)
                                            <option value="{{$index+1}}">{{$month}}</option>
                                            @endforeach
                                            
                                           
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="tahun">Pilih Tahun:</label>
                                        <select name="tahun" id="tahun" class="form-select">
                                            <!-- Tambahkan opsi tahun yang diinginkan -->
                                        </select>
                                    </div>
                                </div>

                                <script src="{{ asset('admin/js/select-transaksi.js') }}"></script>


                            </div>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="tableCos">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 10%;">No</th>
                                            <th>Pelanggan</th>
                                            <th>Invoice</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>


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
