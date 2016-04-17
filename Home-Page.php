<?php
  session_start();

  if(isset($_SESSION["id"]))
  {

    $id=$_SESSION["id"];
    header("Location:http://localhost/WP_Project/HomePage.html?id=$id");
  }
  else {
    header("Location:http://localhost/WP_Project/MainPage.html");
  }
?>
