<?php

    //$indImg = explode(",", $product1['image']);
    foreach ($product1 as $img=>$li) {
    echo '<div>
    <form action="'.base_url('ProjectController/delImage/'.$product1['id']).'" method="POST" enctype="multipart/form-data">
    </div>';
    echo '<h4>Happy Coding</h4>'.'<img src="'.base_url($li).'" width="50" height="50">'.'<a href="'.base_url('ProjectController/delImage/'.$product1['id'].$li).'" class="cicle_time" Onclick="return confirm("Are you sure?");">'.'<i class="fa fa-times-circle" onclick="document.getElementById("imgid").remove()" aria-hidden="true"></i></a>';
    }
/* 
 */
?>




