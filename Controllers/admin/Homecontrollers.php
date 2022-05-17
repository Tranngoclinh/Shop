<?php
include './Model/admin/Homemodel.php';
include './Model/admin/Managemodel.php';
include './Model/admin/Catagorymodel.php';

class Homecontrollers{
   function index(){
      $obj = new HomeModel();
      $object = $obj->getAll();
      $obj = new CustomerModel();
      $objects = $obj->getAll();
      $obj = new Catagorymodel();
      $objs = $obj->getAll();
      // echo '<pre>';
      // print_r(count($_SESSION));
      // die();
      include './Views/Home/index.php';
   }

 
}

?>