<?= $this->extend('layouts/header');?>
<?= $this->section('content');?>



<script>
    function myFunction() {
    const element = document.getElementById("imgid");
    element.remove();
    }
                                
</script>
<style>

.cicle_time{
    position: relative;
    padding:2px 3px;
    font-size: 12px;
    top: -15px;
    right: 22px;
    color:red;
    background-color: white;
    margin-right: 5px;
}

</style>


<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
function showImage(){
$("#loadingImage").toggle();
}
</script>

<div class= "container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h4> Edit & Update Slider Images
                    <a  href="<?= base_url('ProjectController/admin')?>" type="button" class="btn btn-danger btn-sm float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                    <form action="<?=  /*base_url('ProjectController/admin') */ base_url('ProjectController/update1/'.$product1['id']) ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Slider Title</label>
                                <input type="text" name="name" id="" class="form-control" value="<?= $product1['name'] ?>" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Slider Description</label>
                                <textarea name="description" id="" class="form-control" required placeholder="Enter Product description" rows="3"><?= $product1['description'] ?> </textarea>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-2">
                                <label for="">Product Image</label>
                                <input type="file" name="image" id="" class="form-control" multiple="multiple">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                                <button type="submit" name="submit"  class="btn btn-primary px-4 float-end"> Update </button>
                            </div>
                        </div>
                        
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                <ul>
                        <!-- Code to display the Uploaded Images here -->

                            <?php /* for ($i=0;$i<($product1>0);$i++) { */
                            $indImg = explode(",", $product1['image']);
                            foreach ($indImg as $img=>$li) {?> 
                            <li style="list-style:none; display:inline;">
                            <img id='imgid' src="<?= base_url($li)?>" style="padding:2px; "  width="50px" height="50px" alt="ProImg">
                            <a href="<?= base_url('../ProjectController/delImage/'.$img)?>"  class="cicle_time" Onclick="return confirm('Are you sure?');" ><i class="fa fa-times-circle" onclick='unlink("public/Upload/sliders1/".$img)' aria-hidden="true"></i></a>
                            <?php 
                            }
                            /* } */
                            /*<?= base_url('../ProjectController/delImage/'.$img)?>*/
                            ?>
                            </li>
                            
                            

                            







                </ul>
                </div>
                
            </div>
        </div>
    </div>
    

    </div>
</div>

<?= $this->endSection(); ?>

<!-- 'public/Upload/'.  </*?=base_url('ProjectController/edit').'/'.$product1['id']?>*/ -->


