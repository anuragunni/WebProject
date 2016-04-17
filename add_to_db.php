

<?php
  session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$dbname= "test_1";

	$client_name=$_POST["name"];
	$client_email=$_POST["email"];
	$client_password=$_POST["pwd"];
	$client_id=rand(1000,9999);

	$conn= new mysqli($servername,$username,$password, $dbname);

	//if( $conn->connect_error !=""){
	//	die("Connection failed: " .$conn->connect_error);
	//}
	$sql= "INSERT INTO `userdata` VALUES('$client_name','$client_email','$client_password','$client_id',FALSE)";

	if( $conn->query($sql) == true)
	{
		$_SESSION["id"]=$client_id;
  	$_SESSION["email"]=$client_email;
  	$_SESSION["uname"]=$client_name;

    header("Location:http://localhost/WP_Project/Home-Page.php");//Object not found was because of this
	}
	else
	{

    header("Location:http://localhost/WP_Project/MainPage.html");
	}

	$conn->close();
 ?>
