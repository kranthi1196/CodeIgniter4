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
    
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js">

    <link href="<?= base_url('public/Assets/CSS/default_home.css')?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url('public/Assets/CSS/fonts.css')?>" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css1">    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css1">


    
    <script>
document.getElementByName("carousel"). onclick = function () { location.href = "Register.php"; };
</script>
    <style>

@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px) {
 body {
 /* background: green; */
 }
}
    </style>
</head>
<body>
<div id="wrapper">
        <div id="menu-wrapper">
                <div id="menu" class="container">
                    <ul>
                        <li class="current_page_item"><a href="<?php base_url('Index')?>">Homepage</a></li>
                        <li><a href="<?php base_url()?>/ci4/ProjectController/reg">Register</a></li>
                        <li><a href="<?php base_url()?>/ci4/ProjectController/index">Login</a></li>
                        <li><a href="<?php base_url()?>ci4/ProjectController/#">About</a></li>
                        <li><a href="<?php base_url()?>/ci4/ProjectController/">Contact</a></li>
                    </ul>
                </div>
        </div>
        
        <?= $this->renderSection('content');?>