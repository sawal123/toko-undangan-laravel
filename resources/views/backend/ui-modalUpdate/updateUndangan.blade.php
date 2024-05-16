<div class="modal fade" id="upUndanganCetak" tabindex="-1" role="dialog" aria-labelledby="upUndanganCetakTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-xl role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="upUndanganCetakTitle">Edit Data</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-12">
                        <h5>Update Data Undangan</h5>
                        <form action="{{ url('dashboard/up-undangancetak') }}" method="POST" id="form-validation-2"
                            class="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input class="form-control" type="hidden" name="uuid" id="uuid"
                                >
                                <div class="mb-2 col">
                                    <label for="name" class="mb-2">Nama Undangan</label>
                                    <input class="form-control" type="text" name="name" id="name"
                                        placeholder="Enter Name Undangan">
                                    @error('record')
                                        <small>Error Message</small>
                                    @enderror
                                </div>
                                <div class="mb-2 col">
                                    <label for="defaultsatu" class="mb-2">Jenis Undangan</label>
                                    <select  class="form-select"  name="jenis" id="jenis" class="jenis">
                                        @foreach ($jenis as $jen)
                                            <option value="{{ $jen->jenis }}">{{ $jen->jenis }}</option>
                                        @endforeach
                                    </select>
                                    @error('record')
                                        <small>Error Message</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2 col-lg col-sm-12 ">
                                    <label for="kategori" class="mb-2">Kategori Undangan</label>
                                    <select class="form-select" name="kategory" id="kategori">
                                        @foreach ($kategori as $kat)
                                            <option value="{{ $kat->kategory }}">{{ $kat->kategory }}</option>
                                        @endforeach
                                    </select>
                                    @error('record')
                                        <small>Error Message</small>
                                    @enderror
                                </div>
                                <div class="mb-2 col-lg col-sm-12 ">
                                    <label for="stok" class="mb-2">Stok</label>
                                    <input class="form-control" type="number" name="stok" id="stok">
                                    @error('record')
                                        <small>Error Message</small>
                                    @enderror
                                </div>
                                <div class=" mb-2 col-lg col-sm-12 ">
                                    <label for="terjual" class="mb-2">terjual</label>
                                    <input class="form-control" type="number" name="terjual" id="terjual">
                                    @error('record')
                                        <small>Error Message</small>
                                    @enderror
                                </div>
                                <div class="mb-2 col-lg col-sm-12 ">
                                    <label for="harga" class="mb-2">Harga</label>
                                    <input class="form-control" type="number" name="harga" id="harga">
                                    @error('record')
                                        <small>Error Message</small>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="mb-1">
                                <img src="{{}}" alt="">
                            </div> --}}
                            <div class="mb-2">
                                <label for="file" class="mb-2">Gambar</label>
                                <input class="form-control" type="file" name="gambar[]" id="file" multiple
                                    placeholder="Enter password again">
                                @error('record')
                                    <small>Error Message</small>
                                @enderror
                            </div>

                            <div class="form-check my-3">
                                <input class="form-check-input" type="checkbox" value="Y" name="favorite" id="favorite">
                                <label class="form-check-label" for="favorite">
                                  Jadikan Undangan Favorite
                                </label>
                              </div>
                            <textarea class="mb-5" style="margin-top: 30px !important" name="deskripsi" id="dek">
                            </textarea>
                            {{-- <div id="dek"></div> --}}

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



