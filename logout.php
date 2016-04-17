<?php
session_start();
if($_GET["logout"])
  {
    session_unset();
    session_destroy();
    header("Location: ./MainPage.html");
  }
 ?>
