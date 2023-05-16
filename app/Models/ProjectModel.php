<?php 
#database we've used is : ci4_projects
namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'sliderimages';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = [
        'id',
        'name',
        'description',
        'image',
        'created_at',
        'updated_at',
    ];

   /*  public function creatUser($data){

        $builder = $this->db->table('users');
        $res = $builder->insert($data);
        if($this->db->affectedRows==1){
            return true;
        }
        else{
            return false;
        }
    } */
}
