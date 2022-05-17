<?php
include './Model/admin/Adminmodel.php';
include './Views/admin/login.php';
class AdminController
{
   function logincontrollers()
   {

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $email = $_POST['email'];
         $password = $_POST['password'];
         $obj = new LoginAdmin();
         $check = $obj->login($email,$password); 
         $_SESSION['admin']=$check;       
         // echo '<pre>';
         // print_r(  $_SESSION['admin']);                 
         // die();        
         if($check){ 
            header('location: index.php?controllers=home&action=indexhome');
         }
   }
}
}