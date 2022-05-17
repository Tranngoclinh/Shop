<?php
include './Model/shop/homemodel.php';
class Homeshopcontrollers
{
   function Homeindex()
   {
      $obj = new Homeshopmodel();
      $object = $obj->getAll();
      // echo '<pre>';
      // print_r($object);
      // die();

      include 'web/view/index2.php';
   }

   function Women()
   {
      $obj = new Homeshopmodel();
   }
}
