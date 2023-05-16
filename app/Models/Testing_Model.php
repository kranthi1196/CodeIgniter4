<?php
namespace App\Models;

use CodeIgniter\Model;

class Testing_Model extends Model{

    protected $table = 'testing_images';
    protected $primaryKey = 'id';
    Protected $returnType = 'array';
    
    protected $allowedFields = ['id', 'name', 'description', 'image', 'uploaded_at', 'updated_at'];
    

}


?>