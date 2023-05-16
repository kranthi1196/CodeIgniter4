<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProjectModel;

class ProjectController extends Controller
{

/*     public $registerModel;
    public $session;
    public $email; */

    public function __construct(){
        helper('form', 'url');
    /*     $this->registerModel = new RegisterModel();
        $this->session = \config\Services::session();
        $this->email = \config\Services::email();
        $user = null; */
        
    }
    public function index()                                             //This is the Default Page When you load this controller
    {
        $product = new ProjectModel();
        return view('Project_View/index');
    }
    public function reg()                                             //This is the Registration Page
    {

        

        return view('Project_View/reg');
    }

    public function admin()                                             //This is the Registration Page to Display all the Slider Images Uploaded
    {
        $products = new ProjectModel();
        $data['product'] = $products->findAll();
        return view('Project_View/admin', $data);
    }
    public function add()                                             //This is the Add Page to Add the Slider Images
    {
        return view('Project_View/add');
    }
    public function store()                                             //This is the Store View to Save the Submitted Slider Images
    {
        $projectModel = new ProjectModel();
        helper(['form', 'url']);
        $msg = 'Please select a valid files';
        //$data = array();

        if ($this->request->getFileMultiple('image')) {
            $file = $this->request->getFileMultiple('image');
            $instcont = $this->request->getFileMultiple('image');
            $num_files = count($_FILES['image']['tmp_name']);
            for ($i=0; $i < $num_files;$i++) {
                if (is_uploaded_file($_FILES['image']['tmp_name'][$i])) {
                    $name = "Slider_".$i."_".$_FILES['image']['name'][$i];
                    $image_path = 'public/Upload/sliders1/' . $name;
                    if (move_uploaded_file($_FILES['image']['tmp_name'][$i], $image_path)) {
                        $uploaded[] = $image_path;
                    } else {
                        echo "Image(s) not moved";
                    }
                } else {
                    echo "Image(s) not uploaded";
                }
            }
            $imgs  = implode(",", $uploaded);
            $instcont = [
                'name'=> $this->request->getPost('name'),
                'description' => $this->request->getPost('description'),
                'image'=>$imgs,
                        ];
            $save = $projectModel->insert($instcont);
            $msg = "Slider Images Uploaded Successfully";
            return redirect()->to(base_url('ProjectController/admin'))->with('msg', $msg);
            return view('Project_View/admin');
        }
    }

    public function edit($id)                                             //This is the Edit Page to Edit any Entry based on id
    {
        $product = new ProjectModel();
        $data1['product1'] = $product->find($id);
        return view('Project_View/edit', $data1);
    }


    public function update($id) {
        error_reporting(E_ALL);
        $data = array();
    
        if (!empty($_FILES['uploadedimages']['tmp_name'][0])) {
            // echo '<pre>'; print_r($_FILES); die;
            $num_files = count($_FILES['uploadedimages']['tmp_name']);
            for ($i=0; $i < $num_files;$i++) {
                if (is_uploaded_file($_FILES['uploadedimages']['tmp_name'][$i])) {
                    $name = $i.'_'.time().$_FILES['uploadedimages']['name'][$i];
                    $image_path = 'public/Upload/sliders1/' . $name;
                    if (move_uploaded_file($_FILES['uploadedimages']['tmp_name'][$i], $image_path)) {
                        $uploaded[] = $image_path;
                    } else {
                        echo "not moved";
                    }
                } else {
                    echo "not uploaded";
                }
            }
            $imgs  = implode(",", $uploaded);
            $instcont['images'] = $imgs;
            //echo '<pre>'; print_r($instcont); die;
            return view('Project_View/admin');
        }
    }
    

    public function update1($id)                                             //This is the Update View to Update any Entry based on id
    {
    $product = new ProjectModel();
    $prod_item = $product->find($id);
    
        if ($this->request->getFileMultiple('image')) {
        $file = $this->request->getFileMultiple('image');
        $instcont = $this->request->getFileMultiple('image');
        $num_files = count($_FILES['image']['tmp_name']);
        for ($i=0; $i < $num_files;$i++) {
            if (is_uploaded_file($_FILES['image']['tmp_name'][$i])) {
                $name = "Slider_".$i."_".$_FILES['image']['name'][$i];
                $image_path = 'public/Upload/sliders1/' . $name;
                if (move_uploaded_file($_FILES['image']['tmp_name'][$i], $image_path)) {
                    $uploaded[] = $image_path;
                } else {
                    echo "Image(s) not moved";
                }
            } else {
                echo "Image(s) not uploaded";
            }
        }
        $imgs  = implode(",", $uploaded);
        $instcont = [
            'name'=> $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'image'=>$imgs,
                    ];
        $save = $product->save($instcont);
        $msg = "Slider Images Uploaded Successfully";
        return redirect()->to(base_url('ProjectController/admin'))->with('msg', $msg);
        //return view('Project_View/admin');
    }
    }

    public function delete($id)                                 //This is the Delete View to Delete any Entry based on id
    {
        $product = new ProjectModel();
        $data = $product->find($id);
        $imgfile = $data['image'];
        if (file_exists("public/Upload/sliders1/".$imgfile)) {
            unlink("public/Upload/sliders1/".$imgfile);
        }
        $product->delete
        ($id);
        return redirect()->back()->with('status', 'You have Successfully Deleted');
        return view('Project_View/admin');
    }

    public function view($id)                                   //This is the Slider View Page to View Slider Images using any particular id
    {
        $product = new ProjectModel();
        $data['productimg'] = $product->find($id);
        return view('Project_View/view', $data);
    }

    public function delImage($id){
        $product = new ProjectModel();
         $data1['product1']= $product->find($id);
         $imgg = $data1['image']; 
         unlink("public/Upload/sliders1/".$li);
        //$product->delImage($id);
        return redirect()->back()->with('status', 'You have Successfully Deleted Image(s)');

        return view('Project_View/admin', $data1);
    }

}

