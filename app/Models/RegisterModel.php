<?php

namespace App\Models;
use CodeIgniter\Model;

class RegisterModel extends Model{
    public function creatUser($data){

        $builder = $this->db->table('users');
        $res = $builder->insert($data);
        if($this->db->affectedRows==1){
            return true;
        }
        else{
            return false;
        }
    }
}

