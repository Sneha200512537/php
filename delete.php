<?php
  require_once('database.php');
  $id = $_GET['id'];
  $res = $database->delete_blog($id);
  if($res){
    header('location: blogs.php');
  }else{
    echo "Error";
  }
?>
