<?= $this->extend('layouts/header');?>
<?= $this->section('content');?>

<div class= "container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header">
                    <h4> Edit & Update Products
                    <a  href="<?= base_url('products')?>" type="button" class="btn btn-danger btn-sm float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                    <form action="<?= base_url('product/update/'.$product['id'])?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Product Name</label>
                                <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control" required placeholder="Enter Product Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Product Description</label>
                                <textarea name="description" value="" class="form-control" required placeholder="Enter Product description" rows="3"><?= $product['description'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Price</label>
                                <input type="text" name="price" value="<?= $product['price'] ?>" class="form-control" required placeholder="Enter Price">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="">Product Image</label>
                                <input type="file" name="image"  class="form-control" multiple="multiple">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                                <button type="submit" name="submit"  class="btn btn-primary px-4 float-end"> Update </button>
                        </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img src="<?= base_url('public/Upload/'.$product['image']) ?>" class="w-100" alt="Product Image">
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

