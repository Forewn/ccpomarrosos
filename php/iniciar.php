<?php
require_once("conn.php");

// Validación del usuario y la clave
$id = $_POST["cedula"];
$password = $_POST['contra'];

$sql = "SELECT * FROM tmaPer WHERE perCod = '$id';";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
  $row = mysqli_fetch_assoc($result);
  if(password_verify($password, $row["perCon"])){
    session_start();
    $_SESSION['id'] = $row["perCod"];
    $_SESSION['password'] = $row["perCon"];
    $_SESSION['name'] = $row["perNom"];
    header("Location: ../admin/home.php");
  }
  else{
    mysqli_close($conn);
    header("Location: ../login.php");
  }
}
else{
  mysqli_close($conn);
  header("Location: ../login.php");
}
?>
