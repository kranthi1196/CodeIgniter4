<?php
//Note: This Controller was named as Employee in Actual Coding.

namespace App\Controllers;

use \CodeIgniter\Controller;
use App\Models\AdminModel;

class AdminController extends Controller{

    public $admModel; //Global Variable to be used anywhere
    public function __Construct(){ //What ever we declared in a controller, is accessible like a global access 
        $this-> admModel = new AdminModel();
    }
    
    

}
