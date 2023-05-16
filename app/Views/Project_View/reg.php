<?php 
//include("db.php");
?>
<?=$this->extend('layouts/header');?>

<?= $this->section('content');?>

<div id="banner"></div>
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Candidate Registration Page*</h2>
                    <br><?php if(isset($validation)):?>

                        <?= $validation->listErrors(); ?>
                        <?php endif;?>
                    <form action="<?= base_url('ProjectController/index')?>" enctype="multipart/form-data" method="post">
                        <fieldset>
                        <legend>Candidate Details</legend>


                            <?php form_open();?>
                            <div class="form-group">
                                <label for=""><b>User Name</b></label>
                                <input type="text" name="username" id="" class="form-control" value="<?= set_value('username') ?>">                                
                            </div>
                            <div class="form-group">
                                <label for=""><b>Name</b></label>
                                <input type="text" name="name" id="" class="form-control" value="<?= set_value('name') ?>">                                
                            </div>
                            <div class="form-group">
                                <label for=""><b>Mobile</b></label>
                                <input type="text" name="mobile" id="" class="form-control" value="<?= set_value('mobile') ?>">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Email</b></label>
                                <input type="text" name="email" id="" class="form-control" value="<?= set_value('email') ?>">
                            </div>
                            <div class="form-group">
                                <label for=""><b>Password</b></label>
                                <input type="password" name="pass" id="" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for=""><b>Choose Profile Pic<b></label>
                                <input type="file" name="profile_pic" id="" class="form-control" >
                            </div>

                            <div class="form-group">
                            <a href=""><input class="btn btn-danger float:end" type="submit" name="register" value="Register" id="button" ></a><span>
                                <a href="<?= base_url('ProjectController/index')?>"><input class="btn btn-primary" type="submit" name="login" value="Login" id="button"></a>
                                </span>
                            </div>
                        
                            
                        </fieldset>
                    </form>


                </div>
            </div>


<?= $this->endSection();?>