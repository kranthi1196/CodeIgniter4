<?= $this->extend('layouts/header');?>
<?= $this->section('content');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
    .btn_left{
        position: relative;
        display: inline;
        width: 30px;
        height: 100%;
        padding: 20px;
        top: -250px;
        left: 110px;
    }
    .btn_right{
        position: relative;
        display: ;
        width: 30px;
        height: 100%;
        padding:20px;
        top: -250px;
        right: -850px;
    }
    .img_center1{
        width: 1080px;
        height:720px;
    }

</style>

</head>
<body>

<div class= "container mt-4">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (session()->getFlashdata('status')) {
                echo "<h4>".session()->getFlashdata('status')."</h4>";
            }?>
            <div class="card">
                <div class="card-header">
                    <h4>Slider Images
                    <a  href="<?= base_url('ProjectController/admin')?>" type="button" class="btn btn-danger btn-sm float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body ">
                    <?php foreach($productimg as $prod){?>
                    <?php for ($i=0; $i<($productimg>0);$i++) {
                        $indImg = explode(",", $productimg["image"]); ?>
                    <?php foreach ($indImg as $imag) {?> 
                    <div class="w3-content w3-display-container img_center">
                    <img class="mySlides" src="<?= base_url($imag)?>" style="margin-left:100px;" width="80%" height="450px">
                    <?php } ?>
                    <?php }}?>
                    
                    <button style="background:; border-color:; color:;" class="w3-button w3-black w3-display-left btn_left" onclick="plusDivs(-1)">&#10094;</button>
                    <button style="background:; border-color:; color:;" class="w3-button w3-black w3-display-right btn_right" onclick="plusDivs(1)">&#10095;</button>
                    
                    </div>

                    <script>
                    var slideIndex = 1;
                    showDivs(slideIndex);

                    function plusDivs(n) {
                    showDivs(slideIndex += n);
                    }

                    function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                    }
                    x[slideIndex-1].style.display = "block";  
                    }
                    </script>
                
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

    
</body>
</html>




