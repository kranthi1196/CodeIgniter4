<?php

namespace App\Controllers;
use \CodeIgniter\Controller;
use App\Models\EmployeeModel;

class EmployeeController extends controller{
    public $empModel;
    public function __Construct(){
        helper("form");
        $this->empModel = new EmployeeModel();
    }
    public function addEmp(){
        $data = [
            'name' => $this->request->getVar('name',FILTER_SANITIZE_STRING),
            'email' => $this->request->getVar('email',FILTER_SANITIZE_EMAIL),
            'salary' => $this->request->getVar('salary',FILTER_SANITIZE_STRING),
            'mobile' => $this->request->getVar('mobile'),
            'designation' => $this->request->getVar('designation',FILTER_SANITIZE_STRING),
            'city' => $this->request->getVar('city',FILTER_SANITIZE_STRING),
        ];
        if($this->empModel->save($data)===true){
            //echo "Success";
            session()-> setTempdata('success', 'Employee Added Successfully',2);
            return redirect()->to(current_url());
        }
        if($this->empModel->update('id',$data)===true){
            session()-> setTempdata('success', 'Employee Updated Successfully',2);
            return redirect()->to(current_url());
        }

        return view('empadd_view',['errors' => $this->empModel->errors()]);
    }
    public function viewEmp(){
        $data['employees']=$this->empModel->findAll();
        return view("viewemp",$data);
        
    }
    public function editEmp($id=null){
        $data = [
            'name' => $this->request->getVar('name',FILTER_SANITIZE_STRING),
            'email' => $this->request->getVar('email',FILTER_SANITIZE_EMAIL),
            'salary' => $this->request->getVar('salary',FILTER_SANITIZE_STRING),
            'mobile' => $this->request->getVar('mobile'),
            'designation' => $this->request->getVar('designation',FILTER_SANITIZE_STRING),
            'city' => $this->request->getVar('city',FILTER_SANITIZE_STRING),
        ];
        if($this->empModel->update($id,$data)===true){
            session()-> setTempdata('success', 'Employee Edited Successfully',2);
            return redirect()->to(current_url());
        }


        
        return view("empedit_view",['emp'=>$this->empModel->find($id), 'errors' => $this->empModel->errors()]);
    }
    public function deleteEmp($id=null){
        if($this->empModel->where('id', $id)->delete()){
            session()->setTempdata('success','Employee Deleted Successfully',2);
            return redirect()->to(base_url()."/employee/viewemp");
        }
        
    }
    public function uploadImage(){

    }

}