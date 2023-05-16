<?php
namespace App\Models; //importing models namespace 
use CodeIgniter\Model; // using codeigniter models


class Agencymodel extends Model{ //creating a class and extending model class

    protected $table = 'agencies'; // define table here after you specify db in app>config>boot>database.php
    protected $allowedFields = ['name','email']; //specify the required fields you want to use/edit
}

class SlideImages extends model{
    protected $table2 = 'sliderimages';

}

?>