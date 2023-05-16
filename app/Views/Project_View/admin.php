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
                    <h4>Slider Images
                    <a  href="<?= base_url('ProjectController/add')?>" type="button" class="btn btn-primary btn-sm float-end">Add</a>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>description</th>
                                <th>Image</th>
                                <th>Uploaded_At</th>
                                <th>Updated_At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                       <tbody>
                       <?php $i=0; foreach($product as $admn){?>
                            <tr>
                                
                                <td><?= $admn['id'] ?></td>
                                <td><?= $admn['name'] ?></td>
                                <td><?= $admn['description'] ?></td>
                                <td><?php for($i=0;$i<($admn>0);$i++){$indImg = explode(",", $admn['image']); foreach($indImg as $img){?><img src="<?=base_url($img)?>" style="padding:1px" height="20px;" width="20px;" alt="Img".[$i]><?php }}?></td>
                                <td><?= $admn['uploaded_at'] ?></td>
                                <td><?= $admn['updated_at'] ?></td>
                                
                                <td><a href="<?= base_url('ProjectController/edit/'.$admn['id'])?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="<?= base_url('ProjectController/delete/'.$admn['id'])?>" class="btn btn-danger btn-sm">Delete</a>
                                    <a href="<?= base_url('ProjectController/view/'.$admn['id'])?>" class="btn btn-secondary btn-sm">View</a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

</div>

<?= $this->endSection(); ?>

