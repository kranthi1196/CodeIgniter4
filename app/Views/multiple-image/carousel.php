<?= $this->extend('layouts/header');?>
<?= $this->section('content');?>

<div class= "container mt-4">
    <div class="row">
        <div class="col-md-12">
            <?php 
            if(session()->getFlashdata('status')){
            echo "<h4>".session()->getFlashdata('status')."</h4>";
            }
            ?>
            <div class="card">
                <div class="card-header">
                    <h4>Images Data
                    <a  href="<?= base_url('index')?>" type="button" class="btn btn-primary btn-sm float-end">Add</a>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($models as $item):?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['type'] ?></td>
                                <td><img src="<?=FCPATH."uploads/images/multiple-images/".$item['name']?>" height="100px;" width="100px;" alt="Product Image"></td>
                                <td><a href="<?= base_url('product/edit/'.$item['id'])?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="<?= base_url('product/delete/'.$item['id'])?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

</div>

<?= $this->endSection(); ?>

