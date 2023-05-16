<?= $this->extend('layouts/header') ;?>
<?= $this->section('content');?>

<div class= "container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h4> Carousel Image Uploader
                    <a  href=" " type="button" class="btn btn-danger btn-sm float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                    <form action="  " method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Title</label>
                                <input type="text" name="name" id="" class="form-control" required placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Select Image(s)</label>
                                <input type="file" name="image[]" id="" class="form-control" multiple="multiple">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                                <button type="submit" name="submit"  class="btn btn-primary px-4 float-end"> Upload </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>