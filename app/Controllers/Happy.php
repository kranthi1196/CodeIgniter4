<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Happy Extends Controller{
    public function index()
    {
        echo "This is Happy Controller's index Method ";
    }
    public function test($name){
        echo "This is Test method and its parameter is: ".$name;
    }
    public function index1($param1 = null, $param2 = null){
        echo "This is index1 method and it has its parameters:".$param1." ".$param2;
    }
}

?>