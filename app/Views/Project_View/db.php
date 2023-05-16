<?php

$connection = mysqli_connect("localhost",  "root",  "", "ci4_projects");

if (!$connection) {
    echo "Db is not connected";
}
else{
    echo "db is connected";
}

$table_name = "registration";
$table_create = "CREATE TABLE IF NOT EXISTS $table_create (`id` INT(10) NOT NULL, `name` VARCHAR(255) NOT NULL, `mobile` VARCHAR(255) NOT NULL, `email` VARCHAR(255) NOT NULL, `pass` VARCHAR(255) NOT NULL, PRIMARY KEY(id))";
$table_queryex = mysqli_query($table_create, $connection);

if($_REQUEST['register']){
    $name = $_REQUEST['name'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    
    $sql = "INSERT INTO registration (`name`, `mobile`, `email`, `pass`) VALUES ('$name', '$mobile', '$email', '$pass')";
    mysqli_query($sql, $connection);
    echo "success";
    


    }



?>