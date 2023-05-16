<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\TestModel;

class TestController extends Controller
{
    public function index(){
        $this->load->library('upload');
        $image = array();
        $ImageCount = count($_FILES['image_name']['name']);
              for($i = 0; $i < $ImageCount; $i++){
                  $_FILES['file']['name']       = $_FILES['img']['name'][$i];
                  $_FILES['file']['type']       = $_FILES['img']['type'][$i];
                  $_FILES['file']['tmp_name']   = $_FILES['img']['tmp_name'][$i];
                  $_FILES['file']['error']      = $_FILES['img']['error'][$i];
                  $_FILES['file']['size']       = $_FILES['img']['size'][$i];
      
                  // File upload configuration
                  $uploadPath = './public/Assets/Uploads';
                  $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'jpg|jpeg|png|gif';
      
                  // Load and initialize upload library
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config);
      
                  // Upload file to server
                  if($this->upload->do_upload('file')){
                      // Uploaded file data
                      $imageData = $this->upload->data();
                       $uploadImgData[$i]['img'] = $imageData['file_name'];
      
                  }
              }
               if(!empty($uploadImgData)){
                  // Insert files data into the database
                  $this->pages_model->multiple_images($uploadImgData);              
              }
              return view("Test_view/index");
        }
    }
