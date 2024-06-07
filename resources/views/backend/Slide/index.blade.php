@extends('backend.app.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content-tab px-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-flex justify-content-between">
                        <div class="d-flex">
                            {{-- <a href="{{ url('dashboard/costumer') }}" class="btn btn-primary ">Kembali</a> --}}
                            <h4 class="page-title items-center mx-2 my-auto">Slide Undangan Cetak</h4>
                        </div>
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard/undangan') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard/Slide') }}">Slide</a></li>
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
                        <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addSlide"
                            onclick="showModal()"> <i class="mdi mdi-plus"></i> Tambah Slide</button>
                    </div>
                    @include('backend.Slide.modalCreate')
                </div>
            </div>


            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="tableSlide">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 10%;">No</th>
                                            <th>Link</th>
                                            <th>Image</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($slide as $key => $sl)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $sl->link }}</td>
                                                <td><img src="{{ asset('storage/slide/' . $sl->image) }}" width="50"
                                                        width="50" style="object-fit: cover" alt=""></td>
                                                <td>
                                                    <a href="{{ url('dashboard/delete/slide/' . $sl->id) }}"
                                                        class="btn btn-danger sweetdelete"><i
                                                            class="mdi mdi-delete"></i></a>
                                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#upslide{{$sl->id}}"><i
                                                            class="mdi mdi-pencil"></i></button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="upslide{{$sl->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="upslideTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-md role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title m-0" id="upslideTitle">Update Data</h6>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div><!--end modal-header-->
                                                        <div class="modal-body">
                                                            <div class="row">

                                                                <div class="col-lg-12">
                                                                    <h5>Update Data Slide</h5>
                                                                    <form action="{{ url('dashboard/up-slide') }}"
                                                                        method="POST" id="form-validation-2" class="form"
                                                                        enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <input type="hidden" name="id" value="{{$sl->id}}">
                                                                        </div>
                                                                        <div class="mb-2 col">
                                                                            <label class="mb-2">Sort</label>
                                                                            <input class="form-control" type="number" value="{{$sl->sort}}"
                                                                                name="sort" placeholder="Change Sort">
                                                                            {{-- <small>Error Message</small> --}}
                                                                        </div>
                                                                        <div class="mb-2 col">
                                                                            <label class="mb-2">Link</label>
                                                                            <input class="form-control" type="url" value="{{$sl->link}}"
                                                                                name="url" placeholder="Enter Url">
                                                                            {{-- <small>Error Message</small> --}}
                                                                        </div>
                                                                        <div class="mb-2 col">
                                                                            <label class="mb-2">Image</label>
                                                                            <input class="form-control" type="file"
                                                                                name="image">
                                                                            {{-- <small>Error Message</small> --}}
                                                                        </div>
                                                                        <button type="submit"
                                                                            class="mt-5 btn btn-primary">Submit
                                                                            form</button>
                                                                    </form><!--end form-->
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </div><!--end modal-body-->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-de-secondary btn-sm"
                                                                data-bs-dismiss="modal">Close</button>
                                                            {{-- <button type="button" class="btn btn-de-primary btn-sm">Save changes</button> --}}
                                                        </div><!--end modal-footer-->
                                                    </div><!--end modal-content-->
                                                </div><!--end modal-dialog-->
                                            </div><!--end modal-->
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
