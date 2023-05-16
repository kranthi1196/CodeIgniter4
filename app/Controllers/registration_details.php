<?php
namespace App\Controllers;

class Users extends \CodeIgniter\controller{

    public function index(){
        $db = \Config\Database::connect();
        $query = $db->query('select fname, lname, phone, address from registration_details'); // here table name is also users.
        $result = $query->getResult();
        echo "<pre>";
        print_r($result);
    }
}


?>