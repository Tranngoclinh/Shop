<?php
include './db.php';
class Catagorymodel
{
   private $table = 'catalog';
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
      $id = $data['id'];
      $name = $data['namecatagory'];
      $sql = "INSERT INTO $this->table (id,name) VALUES ('$id','$name')";
      $connect->query($sql);
   }
   
   public function delete($id)
   {
     global $connect;
     $sql = "DELETE FROM $this->table WHERE id = $id";
     $connect->exec($sql);
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
   public function update($id, $data)
   {
     global $connect;
     $sql = "UPDATE $this->table SET 
       `name` = '" . $_POST['catagory'] . "'
       WHERE `catalog`.`id` = $id";
     $connect->exec($sql);
    //  echo '<pre>';
    //  print_r($sql);
    //  die();
   }

   public function search($search){
      global $connect;
      $sql = "SELECT * FROM catalog WHERE name LIKE '%$search%'";
      $stmt = $connect->query($sql);
      $stmt->setFetchMode(PDO::FETCH_OBJ);
      $rows = $stmt->fetchAll();
      // echo '<pre>';
      // print_r($rows);
      // die();
      return $rows;
  
  }
}
