<?php
namespace App\Controllers;

class Caller extends \CodeIgniter\Controller{
    public function index(){
        $data = [
                 "page_title" => "CodeIgniter Practice inside Caller/index.php",
                 "page_title2" => "CodeIgniter Practice2 inside CallerView",
                 "page_heading" => "This is Code Igniter 4 Practicals",
                 
                ];
                
                echo view("Caller/index",$data);
                echo view("CallerView",$data);  
    }
}
// Executed Successfully 
// echo view("Caller/index",$data); Calling View Located inside a folder
// echo view("CallerView",$data); Calling a View Located Direcly inside a Views Folder
// Here Which ever View Function is written first, that will have the Highest Priority, i.e, from the above echo view("CallerView",$data); has the highest priority because it was called first so that its contents will be executexd First.
// if echo view("Caller/index",$data); has called first, it will have the highest priority.
?>