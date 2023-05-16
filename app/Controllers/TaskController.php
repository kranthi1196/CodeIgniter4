<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TaskModel;

class TaskController extends Controller{

    public function index(){
        $taskmodel = new TaskModel();

        return view('TaskView/index');
    }
/* *************************************** */
    public function upload(){

        return view('TaskView/upload');
    }
    /* *************************************** */
    public function save(){

        
    }
}