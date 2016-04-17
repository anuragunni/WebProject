<?php
  session_start();

  if(isset($_SESSION["id"]))
  {
    $id=$_SESSION["id"];
   file_put_contents("log".$id.".html","");
//truncate the file to zero
//or you could have used the write method and written nothing to it

//use location header to go back to index.html
  header("Location:./HomePage.html");
  }


?>
