<?php
  session_start();
  if(isset($_SESSION["admin_id"]))
  {
  $servername="localhost";
	$username="root";
	$password="";
	$dbname= "test_1";

  $client_name=$_GET["name"];

	$conn= new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
		die("Connecttion failed");
  else {

    $searchuser="SELECT id FROM userdata WHERE name='$client_name' LIMIT 1";
    $result= mysqli_query($conn,$searchuser);

    $res=mysqli_fetch_assoc($result);
    $id=$res["id"];
  //  var_dump($result);
    $_SESSION["user_id"]= $res["id"];
    header("Location:./admin_message_view.html?id=$id");
    }
  }
  else {
    header("Location:./adminhome.html");
  }
?>
