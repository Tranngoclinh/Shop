<?php
session_start();
$controllers = (isset($_REQUEST['controllers'])) ? $controllers = $_REQUEST['controllers'] : [];
$action = (isset($_REQUEST['action'])) ? $action = $_REQUEST['action'] : [];
switch ($controllers) {
   case 'home':
      include './Controllers/shop/homeshop.php';
      $obj = new Homeshopcontrollers();
      break;
   case 'women':
      include './Controllers/Homecontrollers.php';
      $obj = new Homecontrollers();
      break;
   // case 'men':
   //    include './Controllers/ProfileControllers.php';
   //    $obj = new Profilecontrollers();
   //    break;
   // case 'contact':
   //    include './Controllers/Managecontrollers.php';
   //    $obj = new CustomerControllers();
   //    break;
   // case 'login':
   //    include './Controllers/Catagorycontrollers.php';
   //    $obj = new Catagorycontrollers();
   //    break;
   // case 'register':
   //    include './Controllers/Catagorycontrollers.php';
   //    $obj = new Catagorycontrollers();
   //    break;
   // case 'search':
   //    include './Controllers/Catagorycontrollers.php';
   //    $obj = new Catagorycontrollers();
   //    break;
   // default:
   //    include './Controllers/Admincontrollers.php';
   //    $obj = new AdminController();
   //    break;
}


switch ($action){
   case 'homeshop':
      $obj->Homeindex();
      break;
}
