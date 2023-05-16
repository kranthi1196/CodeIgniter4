<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TestMailController extends controller{

    public function index(){        

        $email = \Config\Services::email();


        $email->setFrom('kranthi.marikanti@gmail.com', 'Profe');
        $email->setTo('marikanti.kranthi@gmail.com');
        $email->setSubject('Account Activation Link');
        $email->setMessage('Hi User, <br><br> Your Account Created Successfully, Please Click the below link to Activate your Account <br>'.'<a target="_blank" href="'.base_url().'/TestMailController/verify">Activate Now </a><br><br> Team, Professor Thoughts');
        $filepath = 'public/Assets/Images/user.webp';
        $email->attach($filepath);
        $email->send();

        if(!$email->send()){
            echo '<center>Account Created Successfully, Please Activate your Account<br><br></center>';
        }
        else{
            echo "Your Account is not created..., Please Try after Some time<br><br>";
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }

    }

    public function verify(){
        echo 'Your Account has been activated successfully';
    }

    
}

?>