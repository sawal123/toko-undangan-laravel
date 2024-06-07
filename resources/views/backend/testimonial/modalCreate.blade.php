<div class="modal fade" id="addSlide" tabindex="-1" role="dialog" aria-labelledby="addSlideTitle" aria-hidden="true">
    <div class="modal-dialog modal-md role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="addSlideTitle">Add Data</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-12">
                        <h5>Input Data Question</h5>
                        <form action="{{ url('dashboard/add-question') }}" method="POST" id="form-validation-2"
                            class="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            </div>
                            <div class="mb-2 col">
                                <label class="mb-2">Title</label>
                                <input class="form-control" type="text" name="title" placeholder="Enter title">
                                <small>Error Message</small>
                            </div>
                            <div class="mb-2 col">
                                <label class="mb-2">Deskripsi</label>
                                <textarea name="deskripsi" id=""
                                    style="width: 100%; padding:5px; border: solid 1px rgb(71, 71, 71); border-radius: 10px ; min-height: 100px;"></textarea>
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
