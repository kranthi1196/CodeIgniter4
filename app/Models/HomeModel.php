<?php

namespace App\Models;
use CodeIgniter\Model;

class HomeModel extends Model{
    protected $table = "products";
    protected $primaryKey = "id";
    protected $allowedFields = [
        'name',
        'image',
    ];

}

?>