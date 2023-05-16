<?php
namespace App\Models;

use CodeIgniter\Model;

class NewModel extends Model{

protected $table = 'products';
protected $primaryKey = 'id';
protected $allowedFields = ['title', 'file'];
protected $useTimestamps = true;
protected $createdField = 'created_at';


protected $returnType = 'array';

protected $validationRules = [
    'title' => 'required|min_length[3]',
    'file' => 'required',
];



}