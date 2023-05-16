<?php
namespace App\Controllers;

class AssociativeArray extends \CodeIgniter\Controller{

    public function index(){      
    $data = ["page_title" => "Ci4 Associative Array",
             "page_body" => "This is an Example for Associative Array inside a Main Associative Data Array",
             "subjects" => ["HTML","CSS","JAVASCRIPT","PHP","MYSQL","ORACLE","JSON","CODEIGNITER","LARAVEL"],         
            ];
    echo view("Associative/index",$data);
    }
//here index(){} is a view, calling as a index function to fetch the data from that respective view.
//or but we are calling the index view from App\Views\Associative\index using the same index_view_named_function
//here $data[]; is a main array. & "subjects"=>[] is a sub array.
}
?>