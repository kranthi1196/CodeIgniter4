<?php 
/* Controller code is here */
namespace App\Controllers; //importing controller namespace
use CodeIgniter\Controller; //using codeigniter controller class
use App\Models\Agencymodel; //use created model here
class Agencies extends Controller{ // extend controller class after creating a controller
    public function index(){
        $model = new AgencyModel(); //creating a our model object
        $data['agencies2'] = $model -> orderBy('name','asc')-> findAll(); // write the db logic you want to execute
        return view('agenciesView', $data);// and finally returning data to the view
        
    }

     public function sort($id){
        
        $db = \Config\Database::connect() or die('Unable to Connect to SliderImages Table');
        $builder = $db->table('sliderimages');
        $query['results'] = $builder->where('id', $id)->get()->getResult();
       
        return view('sortView',$query);

    } 

}
?>

<!-- Model code is here -->

<!-- 
# Add Php Open & Close tags to this code
namespace App\Models;
use CodeIgniter\Model;


class Agencymodel extends Model{

    protected $table = 'agencies';
    protected $allowedFields = ['name','email'];

}
 -->

 <!-- View code is here -->

 <!-- 

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
</head>
<body>
<div class="row mt-3">
     <table class="table table-bordered" id="agencies">       <thead>
   <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Email</th>
          </tr>
       </thead>
       <tbody>
          <?php /* if($agencies):  */?>
          <?php /* foreach($agencies as $agencies1):  */?>
          <tr>
             <td><?php /* echo $agencies1['id']; */ ?></td>
             <td><?php /* echo $agencies1['name']; */ ?></td>
             <td><?php /* echo $agencies1['email']; */ ?></td>
          </tr>
         <?php /* endforeach; */ ?>
         <?php /* endif; */ ?>
       </tbody>
     </table>
  </div>
</div>
</body>
</html>

  -->