<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\HomeModel;

class HomeController extends Controller
{
    public $homeModel;

     public function __construct(){
         helper("form");
         $homeModel = new HomeModel();
     }
    public function index()
    {
        $homeModel = new HomeModel();
        if ($files = $this->request->getFiles()) {
            foreach ($files['img'] as $file) {
                if ($file->isValid() && ! $file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move('./public/Assets/Uploads', $newName);

                    $db=[
                        'name'=> $this->request->getPost('name'),
                        'image'=> $newName,
                    ];
                    $homeModel->insert($db);
                    return redirect()->to(base_url('HomeController'))->with('status','Data Saved Successfully');


                    echo '<br>File updated Successfully, '.$file->getName();
                    echo '<br>File Original Name is: '.$file->getClientName();
                }
            }
        }
        return view("upload_view/index");
    }
/*
    public function upload()
    {
        $this->homeModel = new HomeModel();
        $files1 = $this->request->getFiles();
        if($files1->isValid() && !$files1->hasMoved()){
            $imgName = $files1->getRandomName();
            $files1->move('./public/Uploads', $imgName);
        }
            $db=[
                'name'=> $this->request->getPost('name'),
                'image'=> $imgName,
            ];
            $homeModel->save($db);
            return redirect()->to('phpmyadmin/sql.php?db=ci4_projects&table=products&pos=0')->with('status','Data Saved Successfully');
    }*/
}
