<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\MultiModel;

class MultiController extends Controller
{
   // public $homeModel;

     public function __construct(){
        parent::__construct();
        $this->load->model('MultiModel');
        // helper("form");
         //$homeModel = new HomeModel();
     }

    public function index()
    {

        $data = array();
        $errorUploadingType = $statusMsg ='';
        
        if($this->input->post('submit')){
            if(!empty($_Files['files']['name']) && count(array_filter($_Files['files']['name']))>0){
                $filesCount = count($_Files['files']['name']);
                for($i=0;i<$filesCount;$i++){
                    $_Files['files']['name'] = $_FILES['files']['name'][$i];
                    $_Files['files']['type'] = $_FILES['files']['type'][$i];
                    $_Files['files']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_Files['files']['error'] = $_FILES['files']['error'][$i];
                    $_Files['files']['size'] = $_FILES['files']['size'][$i];

                    $uploadPath = './public/Assets/Uploads';
                    $config['upload_path'] = $uploadPath;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';

                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);

                    if($this->upload->do_upload('file')){
                        $fileData = $this->upload->data();
                        $uploadData[$i]['file_name'] = $fileData['file_name']; 
                        $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                    }else{
                        $errorUploadType .= $_Files['file']['name'].' | ';
                    }
                }
                $errorUploadType = !empty($errorUploadType)?'<br/> File Type Error : '.trim($errorUploadType, ' | '):'';
                if(!empty($uploadData)){

                    $insert = $this->file-> insert($uploadData);

                    $statusMsg = $insert?'Files Uploaded Successfully'.$errorUploadType:'Some Problem Occured, Once Please Try Again.'; 
                }
                else{
                    $statusMsg = 'Sorry! there was an error uploading your file'.$errorUploadType;
                }   
            }else{
                $statusMsg = 'Please Select Image files only to upload';
            }
        }
        $data['files'] = $this->file->getRows();
        $data['statusMsg'] = $statusMsg;

        $this->load->view('Multiple_view/index',$data);


        /*$homeModel = new HomeModel();
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
        }*/
        return view("Multiple_view/index");
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
