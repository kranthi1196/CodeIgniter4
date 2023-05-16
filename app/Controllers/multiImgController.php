<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\multiImgModel;

class multiImgController extends Controller
{
    public function __construct()
    {
        
    }
    public function index()
    {
        return view('multiple-image/index.php');
    }

    public function storeMultipleFile()
    {
        $model = new multiImgModel();
        helper(['form', 'url']);
 
        //$db      = \Config\Database::connect();
        //$builder = $db->table('files');
 
        $msg = 'Please select a valid files';
  
        $data = array();
        //$data['active_tab_var'] = 'travelzoo';
        if ($this->request->getFileMultiple('file')) {
			$instcont = $this->request->getFileMultiple('file');
            $num_files = count($_FILES['file']['tmp_name']);
			for($i=0; $i < $num_files;$i++){
			if(is_uploaded_file($_FILES['file']['tmp_name'][$i]))
            {
				$name = $i.'_'.time().$_FILES['file']['name'][$i];
				$image_path = 'public/Upload/sliders/' . $name;
             if(move_uploaded_file ($_FILES['file']['tmp_name'][$i],$image_path)) {
				 $uploaded[] = $image_path;
			 }else { echo "not moved"; }
			}
			else {
				echo "not uploaded";
			}
			}
			$imgs  = implode(",",$uploaded);
			$instcont['name'] = $imgs;
            $save = $model->insert($instcont);
            $msg = "Files Uploaded Successfully";
 
       return redirect()->to( base_url('multiImgController/index') )->with('msg', $msg);

    }

}
}
/* ********** Below is the Practice Area ********** */    

/* ********** It is Practice Area ********** */    
/*$model = new multiImgModel();
$conn = mysqli_connect("localhost", "root", "", "ci4_projects");

helper('form');

$msg = 'Please select a valid files';
/* ****************************************************************************** */
/*
if ($imagefile = $this->request->getFiles()) {
    foreach ($imagefile['file'] as $img) {
        if ($img->isValid() && !$img->hasmoved()) {
            for ($i=0;$i<count($imagefile);$i++) {
               // $name = $i.'_'.$img->getClientName()[$i];
                //$type = $img->getClientMimeType()[$i];
                
                $imgName[$i] = $img->getClientName();
                $imgType[$i] = $img->getClientMimeType();
                $image_path =  $img->move(FCPATH.'uploads/images/multiple-images/', $imgName[$i]);
                // $image_path =  $img->move(FCPATH. 'uploads/images/multiple-images/', $name);
                $imgArray = implode(" ", $imgName);
                $typeArray = implode(" ", $imgType);
            }
            
            $data =  ['name' => $imgArray,
                        'type' => $typeArray,
                    ];
                    
                    /*$query = "INSERT INTO `files`(`name`,`type`) VALUES('$imgArray','$typeArray')";
                   $dbqry = $conn ->query($query);
                   if($dbqry == true){
                    echo "Data inserted Successfully";
                   }
                   else{
                    echo "Error";
                   }
                  */
                    
                        //$userId = $model->getInsertID();
                        //echo $imgArray.'<br>'.$typeArray.'<br>';
                   /*     $test= implode(" ", $data);
                        $model->insert($data);
                  
                  echo '<pre>'.print_r($img).'/<pre>';
                  
        }
    }
}
}

/**********************************************************/


                    //echo "$data";
                    

                    //$msg = 'Files has been uploaded';

                    //return redirect()->to(base_url('multiImgController/index'))->with('msg', $msg);


                    //$data = array();
                    //$data['active_tab_var'] = 'travelzoo';
                    // if ($this->request->getMethod()) {
                    //$instcont = $this->request->getMethod();

                    //$num_files = count($_FILES['file']['tmp_name']);
                    //for ($i=0; $i < $num_files;$i++) {
                    // if (is_uploaded_file($_FILES['file']['tmp_name'][$i])) {
                    //$name = $i.'_'/*.time()*/.$_FILES['file']['name'][$i];
                    //$image_path = FCPATH.'uploads/images/multiple-images/' . $name;
                    //if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $image_path)) {
                    //   $uploaded[] = $image_path;
                    //} else {
                    //  echo "not moved";
                    //   }
                    //} else {
                    //  echo "not uploaded";
                    //}
                    //}






                    //$msg = 'Files has been uploaded';

                    // return redirect()->to(base_url('multiImgController/index'))->with('msg', $msg);
 
/*
        }
    }
}

*/

/*
/* The code below is invalid, and wrote for testing purpose, please ignore this.
*/


/*

        foreach($this->request->getFileMultiple('file') as $file)
        {

           $data = [
               'name' =>  $file->getClientName(),
               'type'  => $file->getClientMimeType()
             ];
        $save = $model->insert($images);
        $msg = 'Files has been uploaded';
        }
   */
/* ************************************************************************ */



/*   $data = ();
  array(
      [0]=>array([]=>x,[]=>y),[1]=>array([]=>z,[]=>a)
  );
  */

/*

Array ( [0] => Array (
    [invoiceid] => 2
    [client] => Test 1
    [invoicedeliverymethod] => email
    [paymenttimeallotment] => 15
    [clientid] => 1
    [date] => 2012-04-12
    [enddate] => 2012-04-02 00:00:00
    [total] => 250.86
    [remainingbalance] => 250.86
    [ispaid] => No
    [isagentpaid] => No
    [datedistributed] => Not distributed
    [invoicedcontact] => 1 )
    [1] => Array (
        [invoiceid] => 1
        [client] => Test 1
        [invoicedeliverymethod] => email
        [paymenttimeallotment] => 15
        [clientid] => 1
        [date] => 2012-04-12
        [enddate] => 2012-03-31 23:59:59
        [total] => 602.29
        [remainingbalance] => 602.29
        [ispaid] => No
        [isagentpaid] => No
        [datedistributed] => 2012-04-12
        [invoicedcontact] => 1 )
         )

 */

/*

          for($i=0;$i<$count;$i++){

          $data = array(
              array('name' => $file[$i]->getClientName()),
              array('type' => $file[$i]->getClientMimeType()),
          );
      }*/



/* ************************************************************************************** */
/*

$num_files = count($this->request->getFileMultiple('file'));
  for($i=0; $i < $num_files;$i++){
  if(is_uploaded_file($this->request->getFileMultiple('file')[$i]))
  {
      $name = $i.'_'.$this->request->getFileMultiple('file')[$i];
      $image_path = $file->move(WRITEPATH . 'uploads') . $name;
   if(move_uploaded_file ($this->request->getFileMultiple('file')[$i],$image_path)) {
       $uploaded[] = $image_path;
   }else { echo "not moved"; }
  }
  else {
      echo "not uploaded";
  }
  }
  $imgs  = implode(",",$uploaded);
  $instcont['images'] = $imgs;

  $save = $model->insert($instcont['images']);




*/