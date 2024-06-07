@extends('backend.app.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content-tab px-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-flex justify-content-between">
                        <div class="d-flex">
                            {{-- <a href="{{ url('dashboard/costumer') }}" class="btn btn-primary ">Kembali</a> --}}
                            <h4 class="page-title items-center mx-2 my-auto">Testimonial</h4>
                        </div>
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard/undangan') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard/question') }}">Testimonial</a></li>
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
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if ($errors->has('image'))
                        <div class="alert alert-danger">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="mt-3">
                        <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addSlide"
                            onclick="showModal()"> <i class="mdi mdi-plus"></i> Tambah Testimonial</button>
                    </div>
                    @include('backend.Question.modalCreate')
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
                                            <th>Nama</th>
                                            <th>Testimonial</th>
                                            <th>gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testi as $key => $qs)
                                            <tr>
                                                @php
                                                    $textArray = explode(' ', $qs->testimonial);
                                                    $summary =
                                                        count($textArray) > 5
                                                            ? implode(' ', array_slice($textArray, 0, 5)) . ' ...'
                                                            : $qs->testimonial;
                                                @endphp

                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $qs->nama }}</td>
                                                <td>{{ $summary }}</td>
                                                <td><img src="{{ asset('storage/testimonial/' . $qs->gambar) }}"
                                                        width="50" width="50" style="object-fit: cover"
                                                        alt=""></td>
                                                <td>
                                                    <a href="{{ url('dashboard/delete/testimonial/' . $qs->uuid) }}"
                                                        class="btn btn-danger sweetdelete"><i
                                                            class="mdi mdi-delete"></i></a>
                                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#upTestimonial{{ $qs->uuid }}"><i
                                                            class="mdi mdi-pencil"></i></button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="upTestimonial{{ $qs->uuid }}" tabindex="-1"
                                                role="dialog" aria-labelledby="upTestimonialTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-md role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title m-0" id="upTestimonialTitle">Update Data
                                                            </h6>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div><!--end modal-header-->
                                                        <div class="modal-body">
                                                            <div class="row">

                                                                <div class="col-lg-12">
                                                                    <h5>Update Data Testimonial</h5>
                                                                    <form action="{{ url('dashboard/up-testimonial') }}"
                                                                        method="POST" id="form-validation-2" class="form"
                                                                        enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <input type="hidden" name="uuid"
                                                                                value="{{ $qs->uuid }}">
                                                                        </div>

                                                                        <div class="mb-2 col">
                                                                            <label class="mb-2">Nama</label>
                                                                            <input class="form-control" type="text"
                                                                                value="{{ $qs->nama }}" name="nama"
                                                                                placeholder="Enter nama">
                                                                            {{-- <small>Error Message</small> --}}
                                                                        </div>
                                                                        <div class="mb-2 col">
                                                                            <label class="mb-2">Testimonial</label>
                                                                            <textarea name="testimonial" id=""
                                                                                style="width: 100%; padding:5px; border: solid 1px rgb(71, 71, 71); border-radius: 10px ; min-height: 100px;">{{ $qs->testimonial }}</textarea>
                                                                            {{-- <small>Error Message</small> --}}
                                                                        </div>
                                                                        <div class="mb-2 col">
                                                                            <label class="mb-2">Image</label>
                                                                            <input class="form-control" type="file"
                                                                                name="image">

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
