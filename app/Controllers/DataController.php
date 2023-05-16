<?php
namespace App\Controllers;

use \CodeIgniter\Controller;
use \App\Models\Usersmodel; //We are importing the Model

class DataController extends Controller{
    public function index(){
        $UsersModel = new Usersmodel(); // creating object for the UserModel
        $DataController['subjects'] = $UsersModel -> getData(); // we are asiigning the Model to the Controller 
        //print_r($DataController['subjects']);//to check whether data is coming or not.
        return view('dataview', $DataController); // passing the Modeldata to the View 
    }

    public function getUsersList(){
        $UsersModel = new Usersmodel();
        $dataController['registration_details']=$UsersModel -> getUsersList();
        return view('userslistview',$DataController);
    }

}

?>