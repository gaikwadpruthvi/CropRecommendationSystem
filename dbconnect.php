<?php 
$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'project';

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    /*echo "done" ;
}
else{*/
    die('error' . mysqli_connect_error()) ;
}
