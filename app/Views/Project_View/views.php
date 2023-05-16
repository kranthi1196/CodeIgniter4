<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="<?= base_url('public/Assets/CSS/default_home.css')?>" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url('public/Assets/CSS/fonts.css')?>" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    

    <title>Views</title>
</head>
<body>
    <div class="contaner">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h3>Slider Images 
                            <a href="<?= base_url('ProjectController/admin')?>" type="button" class="btn btn-danger btn-sm float-end">Back</a></h3>
                    </div>

                    <div class="card-body justify-content-center">
                        <div class="alert alert-warning">
                            <!-- Carousel Starts from Here -->
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    
                                    <?php for ($i=0; $i<($productimg>0);$i++) {
                                        $indImg = explode(",", $productimg["image"]);?>
                                            
                                                <?php foreach ($indImg as $imag) {?>
                                                    <div class="carousel-item active">
                                                <img src="<?= base_url($imag)?>" width="50%" height="30%" alt="Slide">
                                                </div>
                                                <?php }?>
                                              
                                            
                                            <?php } ?>
                                            <div class="carousel-item">
                                            </div>
                                    </div>

                                </div>
                            </div>
                            
                            <!-- Carousel Ends Here-->
                    </div>
                </div>   
            </div>
        </div>
    </div>
</body>
</html>

