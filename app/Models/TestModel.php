<?php

namespace App\Models;
use CodeIgniter\Model;

class TestModel extends Model{
    protected $table = "products";
    protected $primaryKey = "id";
    protected $allowedFields = [
        'name',
        'image',
    ];

    public function multiple_images($image = array()){

        return $this->db->insert_batch('profile_images',$image);
                }

}

?>