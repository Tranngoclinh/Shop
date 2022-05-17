<?php
$host = 'localhost' ;
$username = 'root';
$password = '';
$database = 'shop' ;

//KẾT NỐI CSDL
global $connect;
$connect = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
// var_dump($connect);
?>          