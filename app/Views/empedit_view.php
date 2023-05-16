<?= $this->extend('layouts/base');?>
<?= $this->section('content');?>

<?php // ****** Html Code Starts from Here ******?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Employee</h2>

            <?php if(!empty($errors)):?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $field => $error):?>
                        <p><?= $error?></p>
                        <?php endforeach;?>
                </div>
            <?php endif ?>
            <?php if(session()->getTempdata('success')):?>
                <div class="alert alert-success">
                    <?= session()->getTempdata('success');?>
                </div>
                <?php endif; ?>
                <?php// print_r($emp);?>

            <?= form_open();?>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="<?= $emp['name'];?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" value="<?= $emp['email'];?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input type="text" name="salary" value="<?= $emp['salary'];?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">City</label>
                <input type="text" name="city" value="<?= $emp['city'];?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Designation</label>
                <input type="text" name="designation" value="<?= $emp['designation'];?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" name="mobile" value="<?= $emp['mobile'];?>" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit"  id="" value="Update" class="btn brn-primary">
            </div>

            <?= form_close();?>
        </div>
    </div>
    </div>
    <?= $this->endSection();?>