<?php 
//include("db.php");
?>
<?=$this->extend('layouts/header');?>

<?= $this->section('content');?>

<div id="banner"></div>
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Candidate Login Page*</h2>
                    <br>
                    <form action="<?= base_url('ProjectController/admin')?>" enctype="multipart/form-data" method="post">
                        <fieldset>
                            <legend>Candidate Login</legend>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="pass" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="login" value="Login" id="button"><span>
                                <a href="<?= base_url('ProjectController/reg')?>"><input class="btn btn-danger float:end" type="button" name="register" value="Register" id="button" ></span></a>
                            </div>
                            <div class="form-group">
                                <a class="a2a_button_facebook" style="text-decoration:none" href="">Login With Google <img height="20" width="20" src="<?= base_url()?>/public/Assets/Images/Google.png" alt=""></a>
                                <a class="" style="text-decoration:none; line-space:200px" href="">Login With Facebook <!-- <i class="fa-brands fa-facebook-f"> --><img height="20" width="20" src="<?= base_url()?>/public/Assets/Images/facebook.svg" alt=""></i></a> 
                            </div>
                            
                        </fieldset>
                    </form>


                </div>
            </div>


<?= $this->endSection();?>