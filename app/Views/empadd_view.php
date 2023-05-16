<?= $this->extend('layouts/base');?>
<?= $this->section('content');?>

<?php // ****** Html Code Starts from Here ******?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Add Employee</h2>

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

            <?= form_open_multipart("http://localhost/ci4/EmployeeController/addemp");?>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input type="text" name="salary" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">City</label>
                <input type="text" name="city" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Designation</label>
                <input type="text" name="designation" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" name="mobile" id="" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit"  id="" value="Submit" class="btn brn-primary">
            </div>

            <?= form_close();?>
        </div>
    </div>
    </div>
    <?= $this->endSection();?>