<?php
session_start();
$controllers = (isset($_REQUEST['controllers'])) ? $controllers = $_REQUEST['controllers'] : [];
$action = (isset($_REQUEST['action'])) ? $action = $_REQUEST['action'] : [];
switch ($controllers) {
   case 'manage':
      include './Controllers/admin/Managecontrollers.php';
      $obj = new ManageControllers();
      break;
   case 'home':
      include './Controllers/admin/Homecontrollers.php';
      $obj = new Homecontrollers();
      break;
   case 'profile':
      include './Controllers/admin/ProfileControllers.php';
      $obj = new Profilecontrollers();
      break;
   case 'managecustomer':
      include './Controllers/admin/Managecontrollers.php';
      $obj = new CustomerControllers();
      break;
   case 'catagory':
      include './Controllers/admin/Catagorycontrollers.php';
      $obj = new Catagorycontrollers();
      break;
   default:
      include './Controllers/admin/Admincontrollers.php';
      $obj = new AdminController();
      break;
}

switch ($action) {
   case 'product':
      $obj->ProductManagement();
      break;
   case 'delete':
      $obj->delete();
      break;
   case 'edit':
      $obj->edit();
      break;
   case 'add':
      $obj->add();
      break;
   case 'personal':
      $obj->profile();
      break;
   case 'update':
      $obj->update();
      break;
   case 'indexhome':
      $obj->index();   
      break;
   case 'search':
      $obj->search();
      break;
   case 'customer':
      $obj->customerindex();     
      break;
   case 'addcustomer':
      $obj->addcustomer();
      break;
   case 'editcustomer':
      $obj->editcustomer();
      break;
   case 'searchcustomer':
      $obj->searchcustomer();
      break;
   case 'deletecustomer':
      $obj->deletecustomer();
      break;
   case 'catagoryproduct':
      $obj->catagoryindex();
      break;
   case 'addcatagory':
      $obj->addcatagory();
      break;
   case 'deletecatagory':
      $obj->deletecatagory();
      break;
   case 'editcatagory':
      $obj->editcatagory();
      break;
   case 'searchcatagory':
      $obj->searchcatagory();
      break;
      // case 'login':
   default:
      $obj->logincontrollers();
      break;
}
