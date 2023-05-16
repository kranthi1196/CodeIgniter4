<?php

/* use App\Controllers\agencies; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<div class="row mt-3"> <!-- creating a table to display data -->
     <table class="table table-bordered" id="agencies">       <thead>
   <tr>
             <th>Id &nbsp;<i class="fa fa-sort" aria-hidden="true" href="<?php ?>"></i></th> 
             <th>Name&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
             <th>Email&nbsp;<i class="fa fa-sort" aria-hidden="true"></i></th>
          </tr>
       </thead>
       <tbody>
          <?php if($agencies2): ?> <!-- Checking data variable attribute contains data or not -->
          <?php foreach($agencies2 as $agencies1): ?> <!-- convering data variable attribute to an array -->
          <tr>
             <td><?php echo $agencies1['id']; ?></td> <!-- printing array of id attribute/column -->
             <td><?php echo $agencies1['name']; ?></td> <!-- printing array of name attribute/column -->
             <td><?php echo $agencies1['email']; ?></td> <!-- printing array of email attribute/column -->
          </tr>

                <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
</body>
</html>