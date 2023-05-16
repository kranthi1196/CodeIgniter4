<?php

namespace App\Controllers;

class Test extends \CodeIgniter\Controller{
    public $parser; // Create a public variable to be reused, and to avoid creating multiple Parser Objects.
    public function __construct(){ //Constructor is Created as a function to be reused 
        $this->parser = \Config\Services::parser(); // creating a parser Object instance, but creating an object inside the constructor doesn't mean that it will be available always, but we have to assign it to a some public variable. and access it using this keyword. and also replace the $parser you used with $this->parser
    }
    public function index(){
        // $parser = \Config\Services::parser(); // In every method Parser Object is need to be created and called
        $data = [
            'page_title' => 'My Blog Title',
            'page_heading' => 'My Blog Page Heading',
            'subjects_list' => [
                ['subject' => 'HTML','abbr' => 'Hyper Text Markup Language'],
                ['subject' => 'CSS','abbr' => 'Cascading Style Sheets'],
                ['subject' => 'JSON','abbr' => 'JavaScript Object Notation'],
                ['subject' => 'AJAX','abbr' => 'Asynchronous JavaScript and XML'],
                ['subject' => 'PHP','abbr' => 'Pre-Processor Hyper Text'],
            ],
            "status" => true,

        ];
        return $parser -> setData($data)->render("MyView/myview");

    }
    public function viewFilter(){
        //$parser = \Config\Services::parser();
        $data = [
            'page_title' => 'My Blog Title',
            'page_heading' => 'My Blog Page Heading',
            'date' => '15-08-1947',//It is in D-M-Y But if in this Application We need to change it as Y-M-D.
            'price' => '500',
            'mobile' => '9640735588',
        ];
        return $this->parser -> setData($data) -> render("MyView/filterview");

    }

}



?>