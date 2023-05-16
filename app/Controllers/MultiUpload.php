<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MultiUpload extends Controller
{
    public function __Construct()
    {
        helper('form');
    }
    public function index()
    {
        $dataArray = [];
        if ($this->request->getMethod()=='post') {
            $rules = [
                'avatar' => 'uploaded [avatar.0] | max_size[avatar,1024] | is_image[avatar]',
            ]; // we can pass a direct function incase of checking whether it is an image or not using ext_in[avatar,png,jpg,jpeg,gif].

            if ($this->validate($rules)) {
                $files = $this->request->getFiles();
                //echo '<pre>'; print_r(getFiles());
                foreach ($files['avatar'] as $img) {
                    if ($img -> isValid() && !$img-> hasMoved()) {
                        if ($img-> move(FCPATH.'public\Uploads', $img->getRandomName())) {
                            echo "<p>".$img->getName()." is moved Succesfully</p>"; // to get Orignial name as after you upload an image you can use, getClientName() instead of getName()
                        } else {
                            echo "<p>".$img->getErrorString()."<p>";
                        }
                    }
                }
            } else {
                $dataArray['validation']= $this->validator;
            }
        }
        return view('multi_view/index', $dataArray);
    }
}
