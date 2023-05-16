<?php

namespace App\Models;
use CodeIgniter\Model;

class TaskModel extends Model{

    protected $table = 'slider_images';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'title',
        'image',
    ];

}