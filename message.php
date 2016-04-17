<?php
  session_start();

  if(isset($_SESSION["id"]))
  {
    $text=$_POST["msg"];
    $id=$_SESSION["id"];
    $name=$_SESSION["uname"];
    $fp= fopen("log".$id.".html",'a');
    date_default_timezone_set("Asia/Calcutta");
    fwrite($fp,"<br><p id='msg'>[".date("h:i A")."] (".$name.") ".$text."</p>");
    fclose($fp);

    header("Location:./HomePage.html?id=$id");

  }
  else {
    header("Location ./MainPage.html");
  }

?>
