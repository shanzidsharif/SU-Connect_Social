@extends('admin.master')

@section('title')
    Admin Profile Edit
@endsection

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Admin Image</h4>

                    <form action="https://themesbrand.com/" method="post" class="dropzone">


                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                            </div>

                            <h4>Drop files here or click to upload.</h4>
                        </div>
                    </form>
                </div>

            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Meta Data</h4>
                    <p class="card-title-desc">Fill all information below</p>

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <div class="fallback">
                                        <label for="profileimage">Image</label>
                                        <input name="file" id="profileimage" type="file" single />
                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                        <div class="mb-3">

                                        </div>
                                    </div>
                                    <label for="profileimage">profileimage</label>
                                    <input id="profileimage" name="image" type="file" class="form-control">
                                    <label for="metatitle">Meta title</label>
                                    <input id="metatitle" name="productname" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="metakeywords">Meta Keywords</label>
                                    <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="metadescription">Meta Description</label>
                                    <textarea class="form-control" id="metadescription" rows="5"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                            <button type="submit" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
