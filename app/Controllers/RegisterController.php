<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RegisterModel;

class RegisterController extends Controller
{
    public $registerModel;
    public $session;
    public $email;

    public function __construct(){
        helper('form', 'url');
        $this->registerModel = new RegisterModel();
        $this->session = \config\Services::session();
        $this->email = \config\Services::email();
        $user = null;

        //$user = $this->request->getVar('username');
    }

    public function index()
    {
        $data = [];
        $data ['validation'] = null;
        if ($this->request->getMethod()=='post') {

            $user = $this->request->getVar('username');
            $rules = [
                'username' => 'required|min_length[5]|max_length[20]|is_unique[users.username]',
                'mobile' => 'required|exact_length[10]|numeric',
                'email'    => 'required|valid_email|is_unique[users.email]',
                'pass' => 'required|min_length[6]',
            ];

            if ($this->validate($rules)) {
                $uniid = md5(str_shuffle('abcdefghijklmnopqrstuvwxyz'.time()));
                //$profile_pic = $_REQUEST['profile_pic'];
               $userdata = [
                'username' => $this->request->getVar('username', FILTER_SANITIZE_STRING),
                'email' => $this->request->getVar('email'), 
                'mobile' => $this->request->getVar('mobile', FILTER_SANITIZE_STRING),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
                'uniid' => $uniid,
                'activation_date'=>date("Y-m-d h:i:s"),
                //'profile_pic' => $profile_pic,
               ];
                    if(!($this-> registerModel->creatUser($userdata))){
                        
                            $to = $this->request->getVar('email');
                            $subject = 'Account Activation Link - Professor Teachings';
                            /* $message = 'Hi! '.$this->request->getVar('username', FILTER_SANITIZE_STRING).", <br><br> Your Account Created Successfully. Please Click the below link to activate your Account. <br><br> <a target='_blank' href'".base_url()."/RegisterController/activate/".$uniid."'>Activate Now</a><br><br>Thanks,<br>Team - Professor Teachings"; */

                            $message = 'Hi! '.$this->request->getVar('name', FILTER_SANITIZE_STRING).", <br><br> Your Account Created Successfully. Please Click the below link to activate your Account. <br><br><a target='_blank' href='".base_url()."/RegisterController/activate/$uniid'>Activate Now</a> <br><br> Thanks,<br>Team - Professor Teachings";

                            $email = \config\Services::email();

                            $email->setTo($to);
                            $email->setFrom('kranthi.marikanti@gmail.com',"Professor's Teachings");
                            $email->setSubject($subject);
                            $email->setMessage($message);
                            $filepath = 'public/Assets/Images/user.webp';
                            $email->attach($filepath);
                            if($email->send()){
                                //echo "Account Created Successfully, Please Activate your Account";
                                $this->session->setTempdata('success', 'Hi '.$this->request->getVar('name', FILTER_SANITIZE_STRING).', Account Created Successfully, Please Activate your Account',3);
                                return redirect()->to(current_url());
                            }
                            else{
                                $this->session->setTempdata('error', 'Account Created Successfully, Sorry! Unable to send activation link, Please Try Agian. or Contact Administrator',3);
                                return redirect()->to(current_url());
                                $data = $this->$email->printDebugger(['headers']);
                                print_r($data);
                            } 
                    }
                    else{
                            $this->session->setTempdata('error', 'Sorry! Unable to create an Account, Please Try Agian.',3);
                            return redirect()->to(current_url());
                    }

            } else {
                $data ['validation'] = $this->validator;
            }
        }
        return view('Register_View/index',$data);
    }
    public function activate(){
        $index = new index();
        $user1="user";
         echo "<center><br><br> Dear ".$user1.' Your Account is Successfully Activated...!</center>';

    }
}