<div class="modal fade" id="addundangancetak" tabindex="-1" role="dialog" aria-labelledby="addundangancetakTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-xl role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="addundangancetakTitle">Add Data</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-12">
                        <h5>Input Data Undangan</h5>
                        <form action="{{ url('dashboard/add-undangancetak') }}" method="POST" id="form-validation-2"
                            class="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="mb-2 col">
                                    <label for="namaundangan" class="mb-2">Nama Undangan</label>
                                    <input class="form-control" type="text" name="name"
                                        placeholder="Enter Name Undangan">
                                    <small>Error Message</small>
                                </div>
                                <div class="mb-2 col">
                                    <label for="email" class="mb-2">Jenis Undangan</label>
                                    <select name="jenis" id="default">
                                        @foreach ($jenis as $jen)
                                            <option value="{{ $jen->uuid }}">{{ $jen->jenis }}</option>
                                        @endforeach
                                    </select>
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-lg col-sm-12 ">
                                    <label for="email" class="mb-2">Kategori Undangan</label>
                                    <select class="form-select" name="kategori">
                                        @foreach ($kategori as $kat)
                                            <option value="{{ $kat->uuid }}">{{ $kat->kategory }}</option>
                                        @endforeach

                                    </select>
                                    <small>Error Message</small>
                                </div>
                                <div class="mb-2 col-lg col-sm-12 ">
                                    <label for="stok" class="mb-2">Stok</label>
                                    <input class="form-control" type="number" name="stok">
                                    <small>Error Message</small>
                                </div>
                                <div class=" mb-2 col-lg col-sm-12 ">
                                    <label for="terjual" class="mb-2">terjual</label>
                                    <input class="form-control" type="number" name="terjual">
                                    <small>Error Message</small>
                                </div>
                                <div class="mb-2 col-lg col-sm-12 ">
                                    <label for="harga" class="mb-2">Harga</label>
                                    <input class="form-control" type="number" name="harga">
                                    <small>Error Message</small>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="file" class="mb-2">Gambar</label>
                                <input class="form-control" type="file" name="gambar[]" id="file" multiple
                                    placeholder="Enter password again">
                                <small>Error Message</small>
                            </div>


                            <textarea class="mb-5"  style="margin-top: 30px !important" name="deskripsi" id="deks"></textarea>

                            <button type="submit" class="mt-5 btn btn-primary">Submit form</button>
                        </form><!--end form-->

                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-de-primary btn-sm">Save changes</button> --}}
            </div><!--end modal-footer-->
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div><!--end modal-->
