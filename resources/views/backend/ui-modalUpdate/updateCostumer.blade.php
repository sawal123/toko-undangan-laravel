<div class="modal fade" id="upCostumer" tabindex="-1" role="dialog" aria-labelledby="upCostumerTitle" aria-hidden="true">
    <div class="modal-dialog modal-md role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="upCostumerTitle">Edit Data</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-12">
                        <h5>Update Data Costumer</h5>
                        <form action="{{ url('dashboard/up-costumer') }}" method="POST" id="form-validation-2"
                            class="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="uuid" id="uuid">
                            </div>
                            <div class="mb-2 col">
                                <label class="mb-2">Nama</label>
                                <input class="form-control" type="text" name="name" id="name"
                                    placeholder="Enter Name Costumer">
                               
                            </div>
                            <div class="mb-2 col">
                                <label class="mb-2">Nomor Hp</label>
                                <input class="form-control" type="number" name="nomor" id="nomor"
                                    placeholder="Enter Number Phone">
                               
                            </div>
                            <div class="mb-2 col">
                                <label class="mb-2">Alamat</label>
                                <input class="form-control" type="text" name="alamat" id="alamat"
                                    placeholder="Enter Address">
                               
                            </div>
                            <div class="mb-2 col-lg col-sm-12 ">
                                <label for="email" class="mb-2">Badan Usaha</label>
                                <select class="form-select" name="badan" id="usaha">
                                    <option disabled selected>---Pilih Salah Satu---</option>
                                    <option value="Perorangan">Perorangan</option>
                                    <option value="PT">PT</option>
                                    <option value="CV">CV</option>
                                    <option value="Lainnya">Lainnya</option>

                                </select>
                               
                            </div>




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
