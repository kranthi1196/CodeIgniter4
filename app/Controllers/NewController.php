<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NewModel;

class NewController extends Controller{
public $newModel;
public function __Construct(){
    helper("form");
    $this->newModel = new NewModel();
}

        

public function upload(){
if($this->request->getFile('file')){
foreach ($this->request->getFileMultiple('file') as $file) {
    if ($file->isValid() && ! $file->hasMoved()) {
        $newName = $file->getRandomName();
        $file->move('Upload', $newName);

        $data = [
            'title' => $file->getRandomName(),
            'type'  => $file->getClientMimeType(),
        ];

        if ($this->newModel->insert($data)===true) {
            session()->setTempdata('success', 'Data Submitted Successfully...');
            return redirect()->to(current_url());
        }
    }
}

}

return view('New_View/index');
}
/*
public function retrieve(){

    if(!empty($this->request->getFileMultiple('file'))){
        foreach ($this->request->getFileMultiple('file') as $file){ 
            echo "<img src='base_url('public/Assets/Uploads'.$file[file])>";
        
        echo '<p>'.'Uploaded On '.date("j M Y", strtotime($file['uploaded_on'])).'</p>';
        }
        }else{ 
        echo '<p> File(s) Not Found </p>';
       } 
    

}
*/

}