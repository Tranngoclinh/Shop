<?php
include './Model/admin/Managemodel.php';
include './Model/admin/Catagorymodel.php';
class ManageControllers
{
  
  function index()
  {
    $obj = new ManageModel();
    $object = $obj->getAll();

  
    include './Views/Home/index.php';
  }

  function ProductManagement()
  {
    $obj = new ManageModel();
    $object = $obj->getAll();
    include './Views/Manage/Product/product.php';
  }

  public function add()
  {
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $object  = new ManageModel();
      $a = $object->add($_REQUEST);
      // echo '<pre>';
      // print_r($_REQUEST);
      // die();
      
      $_SESSION['flash_message'] = "Thêm sản phẩm thành công";
      header('location: index.php?controllers=manage&action=product');
    }
    $obj = new Catagorymodel();
    $objects = $obj->getAll();
    include './Views/Manage/Product/addproduct.php';
  }

  

  public function edit()
  {
    $id = $_GET['id'];
      // echo '<pre>';
      // print_r($id);
      // die();
    $obj = new Catagorymodel();
    $objects = $obj->getAll($id);
    $object = new ManageModel();
    $obj = $object->getOne($id);
   // print_r($obj);die(); 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $object->update($id, $_REQUEST);
      // echo '<pre>';
      // print_r($_REQUEST);
      // die();
      $_SESSION['flash_message'] = "Chỉnh sửa thành công";
      header('Location:index.php?controllers=manage&action=product');
    }
   
    include_once './Views/Manage/Product/editproduct.php';
  }
  public function search()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['search'])) {

      $search = $_POST['search'];
      $object = new ManageModel();
      $object->search($search);
      $objects = $object->search($search);
      // echo '<pre>';
      // print_r($objects);
      // die();
    } else {
      $objects = null;
    }
    include_once './Views/Manage/Product/searchproduct.php';
  }
  public function delete()
  {
    
    $id = $_GET['id'];
    $object = new ManageModel();
    $object->delete($id);
    
    $_SESSION['flash_message'] = "Xóa thành công";

    header('Location: index.php?controllers=manage&action=product');
  }
}



class CustomerControllers
{
  function customerindex()
  {
    $obj = new CustomerModel();
    $object = $obj->getAll();
    // echo count($object);
    include './Views/Manage/Customer/customer.php';
  }

  public function addcustomer()
  {  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $object  = new CustomerModel();
      $a = $object->add($_REQUEST);
      $_SESSION['flash_message'] = "Thêm khách hàng thành công";
      // print_r($a);
      // die();
      header('location: index.php?controllers=managecustomer&action=customer');
    }
    include './Views/Manage/Customer/addcustomer.php';
  }

  public function deletecustomer()
  {

    $id = $_GET['id'];
    $object = new CustomerModel();
    $object->delete($id);
    $_SESSION['flash_message'] = "Xóa thành công";


    header('Location: index.php?controllers=managecustomer&action=customer');
  }

  public function editcustomer()
  {
    $id = $_GET['id'];
    $object = new CustomerModel();
    $obj = $object->getOne($id);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_SESSION['flash_message'] = "Chỉnh sửa thành công";
      // echo "<pre>"; 
      // print_r($_REQUEST);
      $object->update($id, $_REQUEST);
      //  echo "<pre>"; 
      // print_r($object);
      // die();

      header('Location: index.php?controllers=managecustomer&action=customer');
    }
    include_once './Views/Manage/Customer/editcustomer.php';
  }

  public function searchcustomer()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['search'])) {

      $search = $_POST['search'];
      $object = new CustomerModel();
      $object->search($search);
      $objects = $object->search($search);
      // echo '<pre>';
      // print_r($objects);
      // die();
    } else {
      $objects = null;
    }
    include_once './Views/Manage/Customer/searchcustomer.php';
  }

  
}
