<?php

namespace App\Models;

use CodeIgniter\Model;

class MultiModel extends Model
{
    public function __construct()
    {
        $this->$tableName = "products";
    }
    public function getRows($id='')
    {
        $this->db->select('id,title,image_name,uploaded_on,status');
        $this->db->from('files');
        if ($id) {
            $this->db->where('id, $id');
            $query-> $this-> db->get();
            $reuslt = $query-> result_array();
        }
        return !empty($reuslt) ? $reuslt : false;
    }
    public function insert($data=array()){
        $insert = $this->db->insert_batch('files', $data);
        return $insert?true:false;

    }
}
