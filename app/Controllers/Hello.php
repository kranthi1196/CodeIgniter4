<?php

namespace App\Controllers;

class Hello extends BaseController
{
    public function index()
    {
        
        return view("Hello/index");
        //return view("Hello/footerview");
    }
}
?>