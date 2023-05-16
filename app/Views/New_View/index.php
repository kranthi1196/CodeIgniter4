<?php
//include "Home_validations.php";
//if(isset($_REQUEST['login'])){header("Location:Admin.php");}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="<?= base_url('public/Assets/CSS/default_home.css')?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url('public/Assets/CSS/fonts.css')?>" rel="stylesheet" type="text/css" media="all" />
    <script>
document.getElementByName("carousel"). onclick = function () { location.href = "Register.php"; };
</script>
    <style>


    </style>
</head>
<body>
<div id="wrapper">
        <div id="menu-wrapper">
                <div id="menu" class="container">
                    <ul>
                        <li class="current_page_item"><a href="#">Homepage</a></li>
                        <li><a href="Register.php">Register</a></li>
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
        </div>
        <div id="banner"></div>
        <div id="page" class="container">
            <?php

            echo !empty($statusMsg)?'<p>'.$statusMsg.'</p>':'';
            if(session()->getFlashdata('status')){
                echo '<h4>'.session()->getFlashdata('status').'</h4>';
            }?>
            
        <div id="content">
			<div class="title">
				<h2>Carousel Image Uploader Page</h2>
                <br>
                <form action="" enctype="multipart/form-data" method="post">
                <fieldset>
                    <legend>Uploade Images</legend>

                    <div class="form-group justify-content:center"><br>
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="">
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="file[]" multiple>
                    <br>
                    <input style="align-items:center; " class="btn btn-primary" type="submit" name="home_submit" value="Submit" id="button">
                    </div>    
                    
                
                    </fieldset>
                    </form>

                    
                    

        </div>
</div>
</body>
</html>