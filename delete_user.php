<?php
  require_once('database.php');
  $email = $_GET['email'];
  $res = $database->delete_user($email);
  if($res){
    header('location: registeredUsers.php');
  }else{
    echo "Failed to delete";
  }
?>
