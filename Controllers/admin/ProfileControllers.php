<?php
include './Model/admin/ProfileModel.php';
class Profilecontrollers
{
   function profile()
   {
      // extract($data);
      // ob_start();
      $objProfile = new ProfileModel();

      $objects = $objProfile->getAll();
      // echo '<pre>';
      // print_r($objects);
      // die();
      // header('location: index.php?controllers=profile&action=personal');
      include './Views/Manage/Profile/profile.php';

   }
   public function update(){
      $id = $_GET['id'];
      $object = new ProfileModel();
      $objects = $object->getOne($id);
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){  
         //  echo "<pre>"; 
         //  print_r($_REQUEST); 
       $objects= $object->edit($id,$_REQUEST);  

        header('Location:index.php?controllers=profile&action=personal');
      }
      // $NotetypeModel = new NotetypeModel();
      // $notestypes = $NotetypeModel->getAll();
      include './Views/Manage/Profile/updateprofile.php';
  }
}

