<?php
include './db.php';
class ManageModel {
  private $table = 'product';
   function getAll()
   {
     global $connect;
     $sql = "SELECT product.*,catalog.name AS catalogName FROM `product` JOIN catalog ON product.catalog = catalog.id";   
     $stmt = $connect->query($sql);
     //Thiết lập kiểu dữ liệu trả về
     $stmt->setFetchMode(PDO::FETCH_OBJ);
     //fetchALL se tra ve du lieu nhieu hon 1 ket qua
     $rows = $stmt->fetchAll();
    
     //Tra dữ liệu ve controller
     return $rows;
     
   }

   function add($data)
   {
     global $connect;
    //  $id = $data['id'];
     $catalog = $data['catalog'];
     $name = $data['name'];
     $price = $data['price'];
     $quantity = $data['quantity'];
     $image= $data['image'];
     $description = $data['description'];
 
     $sql = "INSERT INTO $this->table (catalog,name,price,quantity,image,description) VALUES ('$catalog','$name','$price','$quantity','$image','$description')";
     $connect->query($sql);
   }
 
   public function getOne($id)
   {
   
     global $connect;
     $sql = "SELECT * FROM $this->table WHERE id = $id";
     $stmt = $connect->query($sql);
     $stmt->setFetchMode(PDO::FETCH_OBJ);
     $rows = $stmt->fetch();
     return $rows;
   }
 

   //cập nhật dữ liệu theo id
   public function update($id, $data)
   {
     global $connect;
     $sql = "UPDATE $this->table SET  
       `catalog` = '" . $_POST['catalog'] . "', 
       `name` = '" . $_POST['name'] . "', 
       `price` = '" . $_POST['price'] . "', 
       `quantity` = '" . $_POST['quantity'] . "', 
       `image` = '" . $_POST['image'] . "',
       `description` = '" . $_POST['description'] . "'
       WHERE `product`.`id` = $id";
     $connect->exec($sql);
    //  echo '<pre>';
    //  print_r($sql);
    //  die();
   }
 
   //xóa dữ liệu
   public function delete($id)
   {
     global $connect;
     $sql = "DELETE FROM $this->table WHERE id = $id";
    //  echo '<pre>';
    // print_r($sql);
    // die();
     $connect->exec($sql);
   }

   public function search($search){
    global $connect;
    $sql = "SELECT * FROM product WHERE name LIKE '%$search%'";
    $stmt = $connect->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();
    // echo '<pre>';
    // print_r($rows);
    // die();
    return $rows;
}
}

class CustomerModel {
  private $table = 'customer';
   function getAll()
   {
     global $connect;
     $sql = "SELECT * FROM $this->table";
     $stmt = $connect->query($sql);
     //Thiết lập kiểu dữ liệu trả về
     $stmt->setFetchMode(PDO::FETCH_OBJ);
     //fetchALL se tra ve du lieu nhieu hon 1 ket qua
     $rows = $stmt->fetchAll();
     //Tra dữ liệu ve controller
     return $rows;
   }

   function add($data)
   {
     global $connect;
     $name = $data['name'];
     $phone = $data['phone'];
     $address = $data['address'];
     $sql = "INSERT INTO $this->table (name,phone,address) VALUES ('$name','$phone','$address')";
     $connect->query($sql);
   }

   public function getOne($id)
   {
     // echo '<pre>';
     // print_r($_REQUEST);
     // die();
     global $connect;
     $sql = "SELECT * FROM $this->table WHERE id = $id";
     $stmt = $connect->query($sql);
     $stmt->setFetchMode(PDO::FETCH_OBJ);
     $rows = $stmt->fetch();
     return $rows;
   }

   //cập nhật dữ liệu theo id
   public function update($id)
   {
     global $connect;
     $sql = "UPDATE $this->table SET 
       `name` = '" . $_POST['name'] . "', 
       `phone` = '" . $_POST['phone'] . "', 
       `address` = '" . $_POST['address'] . "'
       WHERE `customer`.`id` = '$id'";
        //  echo '<pre>';
        //  print_r($sql);
        //  die();
     $connect->exec($sql);
     // echo '<pre>';
     // print_r($sql);
     // die();
   }
 
   //xóa dữ liệu
   public function delete($id)
   {
     global $connect;
     $sql = "DELETE FROM $this->table WHERE id = $id";
     $connect->exec($sql);
   }

   public function search($search){
    global $connect;
    $sql = "SELECT * FROM customer WHERE name LIKE '%$search%'";
    $stmt = $connect->query($sql);
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $rows = $stmt->fetchAll();
    // echo '<pre>';
    // print_r($rows);
    // die();
    return $rows;
}

}


?>