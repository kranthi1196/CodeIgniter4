<?php

namespace App\Models;
use CodeIgniter\Model;

class multiImgModel extends Model{

    protected $table = 'files';
    protected $primaryKey = 'id';
    
    
    protected $allowedFields = [
        'name',
        'type',
    ];

}