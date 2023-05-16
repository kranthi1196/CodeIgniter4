<?php

/* use App\Controllers\agencies; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<div class="row mt-3"> <!-- creating a table to display data -->
     <table class="table table-bordered" id="agencies">       <thead>
   <tr>
             <th>Id &nbsp;<i class="fa fa-sort" aria-hidden="true" href="<?php ?>"></i></th> 
             <th>Name&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
             <th>Image&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
          </tr>
       </thead>
       <tbody>
                <?php  if($results):  ?>
                <?php  foreach($results as $result):?>
                <tr>
                    <td><?php echo $result->id; ?></td>
                    <td><?php echo $result->name; ?></td>
                    <td><?php /* echo $slider['description'];  */?></td>
                </tr>
                <?php  endforeach;  ?>
         <?php  endif;  ?>
       </tbody>
     </table>
  </div>
</div>
</body>
</html>