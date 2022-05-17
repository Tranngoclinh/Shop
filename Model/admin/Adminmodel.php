<?php
include './db.php';
// include './Views/admin/login.php';
class LoginAdmin
{
  function login($email, $password)
  {
    global $connect;
    $sql = " SELECT * FROM admin WHERE email = '$email' AND password = '$password'"; //truy vấn vào database
    // $query = mysqli_query($connect, $sql);
    $query = $connect->query($sql);
    $query->setFetchMode(PDO::FETCH_OBJ);
    $rows = $query->fetch();
    if (isset($rows)) {
      return $rows;
    } else {
      return false;
    }
  }
}
