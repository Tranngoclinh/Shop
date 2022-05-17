<?php
include './Model/admin/Catagorymodel.php';

class Catagorycontrollers
{
   function catagoryindex()
   {
      $obj = new Catagorymodel();
      $object = $obj->getAll();
      include './Views/Catagory/catagory.php';
   }

   function addcatagory()
   { {
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $object  = new Catagorymodel();
            $a = $object->add($_REQUEST);
            $_SESSION['flash_message'] = "Thêm danh mục thành công";
            header('location: index.php?controllers=catagory&action=catagoryproduct');
         }
         include './Views/Catagory/addcatagory.php';
      }
   }

   public function deletecatagory()
  {
    $id = $_GET['id'];
    $object = new Catagorymodel();
    $object->delete($id);
    $_SESSION['flash_message'] = "Xóa danh mục thành công";
    header('Location: index.php?controllers=catagory&action=catagoryproduct');
  }
  public function editcatagory()
  {
    $id = $_GET['id'];
    $object = new Catagorymodel();
    $obj = $object->getOne($id);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $object->update($id, $_REQUEST);
      // echo '<pre>';
      // print_r($_REQUEST);
      // die();
      $_SESSION['flash_message'] = "Chỉnh sửa danh mục thành công";
      header('Location:index.php?controllers=catagory&action=catagoryproduct');
    }
    include_once './Views/Catagory/editcatalogy.php';
  }

  function searchcatagory(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['search'])) {

      $search = $_POST['search'];
      $object = new Catagorymodel();
      $object->search($search);
      $objects = $object->search($search);
      // echo '<pre>';
      // print_r($objects);
      // die();
    } else {
      $objects = null;
    }
    include_once './Views/Catagory/searchcatagory.php';

  }
}
