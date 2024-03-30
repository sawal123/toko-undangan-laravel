<div class="modal fade" id="addCostumer" tabindex="-1" role="dialog" aria-labelledby="addCostumerTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-md role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="addCostumerTitle">Add Data</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-12">
                        <h5>Input Data Costumer</h5>
                        <form action="{{ url('dashboard/add-costumer') }}" method="POST" id="form-validation-2"
                            class="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                
                               
                               
                            </div>
                            <div class="mb-2 col">
                                <label  class="mb-2">Nama</label>
                                <input class="form-control" type="text" name="name"
                                    placeholder="Enter Name Costumer">
                                <small>Error Message</small>
                            </div>
                            <div class="mb-2 col">
                                <label  class="mb-2">Nomor Hp</label>
                                <input class="form-control" type="number" name="nomor"
                                    placeholder="Enter Number Phone">
                                <small>Error Message</small>
                            </div>
                            <div class="mb-2 col">
                                <label  class="mb-2">Alamat</label>
                                <input class="form-control" type="text" name="alamat"
                                    placeholder="Enter Address">
                                <small>Error Message</small>
                            </div>
                            <div class="mb-2 col-lg col-sm-12 ">
                                <label for="email" class="mb-2">Badan Usaha</label>
                                <select class="form-select" name="badan">
                                    <option disabled selected>---Pilih Salah Satu---</option>
                                    <option value="Perorangan">Perorangan</option>
                                    <option value="PT">PT</option>
                                    <option value="CV">CV</option>
                                    <option value="Lainnya">Lainnya</option>

                                </select>
                                <small>Error Message</small>
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
