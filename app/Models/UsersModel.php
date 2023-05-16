<?php

namespace App\Models;
use \CodeIgniter\Model;

class UsersModel extends Model{
    public function getData(){
        $subjects = [
            ['subject' => 'HTML', 'abbr' => 'Hyper Text Markup Language'],
            ['subject' => 'CSS', 'abbr' => 'Cascading Style Sheets'],
            ['subject' => 'JSON', 'abbr' => 'JavaScript Object Notation'],
            ['subject' => 'AJAX', 'abbr' => 'Asynchronous JavaScript and XML'],
            ['subject' => 'PHP', 'abbr' => 'PreProcessor Hyper Text'],
        ];
        return $subjects;
    }
    public function getUsersList(){
        $db = \Config\Database::connect();
        $query = $db-> query('select fname, lname, mobile, email from registration_details');
        $result = $query->getResult(); // is used to get the data in terms of the array of object, if data is in array of objects then we can iterate the data using the Model only.
        //before returning the data, we should check that whether the data is available or not.
        if(count($result)>0){
            return $result;
        }
        else{
            return false;
        }
        //after this the model should be called in controller
    }

}

?>