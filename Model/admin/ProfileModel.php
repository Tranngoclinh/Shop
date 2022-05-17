<?php 
include './db.php';
class ProfileModel{
   private $table = 'profileadmin';
   function getAll()
   {
     global $connect;
     $sql = "SELECT * FROM $this->table";
     $stmt =$connect->query($sql);
     $stmt->setFetchMode(PDO::FETCH_OBJ);
     $rows = $stmt->fetchAll();
   //  echo"<pre>";
   //  printf($rows);
   //  die();
     return $rows;
   }

   public function edit($id, $data)
   {
     global $connect; 
     $firstname = $data['firstname'];
     $lastname = $data['lastname'];
     $birthday = $data['birthday'];
     $address = $data['address'];
     $phone = $data['phone'];
     $email = $data['email'];
     $sql = "UPDATE $this->table SET firstname = '$firstname',lastname = '$lastname',birthday = '$birthday',address = '$address',phone = '$phone',email = '$email' WHERE id = '$id'";     
     $connect->exec($sql);
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
}
?>