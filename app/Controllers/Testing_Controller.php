<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\User\TestingModel;

class TestingController extends Controller{

    public function __construct(){
        helper('form', 'url');
    }

    public function index(){
        $ind = new Testing_Model();
        return view('Testing_view/index');
    }




}
?>