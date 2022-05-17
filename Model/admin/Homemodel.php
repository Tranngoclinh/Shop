<?php 
include './db.php';

class HomeModel{
   private $table = 'product';
   function getAll()
   {
     global $connect;
     $sql = "SELECT * FROM $this->table";
      
     $stmt = $connect->query($sql);
    //  echo '<pre>';
    //   print_r($stmt1);
    //   die();
     //Thiết lập kiểu dữ liệu trả về
     $stmt->setFetchMode(PDO::FETCH_OBJ);
     //fetchALL se tra ve du lieu nhieu hon 1 ket qua
     $rows = $stmt->fetchAll();
     //Tra dữ liệu ve controller
     return $rows;
   }
  

}
