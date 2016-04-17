<?php
session_start();

if(isset($_SESSION["admin_id"]))
{
  $text=$_POST["msg"];
  $id=$_SESSION["user_id"];
  $name=$_SESSION["admin_name"];
  $fp1= fopen("log".$id.".html",'a');
  date_default_timezone_set("Asia/Calcutta");
  fwrite($fp1,"<br><p id='msg'>[".date("h:i A")."] (admin) ".$text."</p>");
  fclose($fp1);

  header("Location:./admin_message_view.html?id=$id");

}
else {
  header("Location ./MainPage.html");
}
?>
