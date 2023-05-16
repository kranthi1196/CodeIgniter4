<?php
namespace App\Controllers;

class Data extends \CodeIgniter\Controller{
    public function index(){
        $table = new \CodeIgniter\view\Table();
        /* Printing Data using Array Method */ 

       $data = [
            ['Name', 'City', 'State'],
            ['Fred', 'Hyderabad', 'Telangana'],
            ['Mary', 'Kolkata', 'West Bengal'],
            ['John', 'Mumbai', 'Maharasta'],
        ];
        $records['users'] = $table -> generate($data);

        /* 2. Printing Data using Predefined Methods. */
        /* $table -> setHeading(['Name', 'City', 'State']);
        $table -> addRow(['Kranthi Kumar', 'Hyderabad', 'Telangana']);
        $table -> addRow(['Kranthi Kumar1', 'Mumbai', 'Maharastra']);
        $table -> addRow(['Kranthi Kumar2', 'Bangalore', 'Karnataka']);
        $records['users'] = $table -> generate();*/ 
        
        /*3. Adding Template to a Table Data */ 
        $template = [
            'table_open' => '<table border="1" cellpadding="4" cellspacing="0">',
        
            'thead_open'  => '<thead>',
            'thead_close' => '</thead>',
        
            'heading_row_start'  => '<tr>',
            'heading_row_end'    => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end'   => '</th>',
        
            'tfoot_open'  => '<tfoot>',
            'tfoot_close' => '</tfoot>',
        
            'footing_row_start'  => '<tr>',
            'footing_row_end'    => '</tr>',
            'footing_cell_start' => '<td>',
            'footing_cell_end'   => '</td>',
        
            'tbody_open'  => '<tbody>',
            'tbody_close' => '</tbody>',
        
            'row_start'  => '<tr>',
            'row_end'    => '</tr>',
            'cell_start' => '<td>',
            'cell_end'   => '</td>',
        
            'row_alt_start'  => '<tr>',
            'row_alt_end'    => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end'   => '</td>',
        
            'table_close' => '</table>',
        ];
        
        $table->setTemplate($template);
        $records['users'] = $table -> generate($data);
        echo view("DataView/index", $records);
    }
}

?>
