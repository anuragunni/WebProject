

<?php

	$servername="localhost";
	$username="root";
	$password="";
	$dbname= "test_1";

	$client_name=$_POST["name"];
	$client_email=$_POST["email"];
	$client_password=$_POST["pwd"];
	$client_id=rand(0,9999);

	$conn= new mysqli($servername,$username,$password, $dbname);

	//if( $conn->connect_error !=""){
	//	die("Connection failed: " .$conn->connect_error);
	//}
	$sql= "INSERT INTO `userdata` VALUES('$client_name','$client_email','$client_password','$client_id')";
	if( $conn->query($sql) == true)
		header("Location:http://localhost/WP_Project/Home-Page.php");
	else
		header("Location:http://localhost/WP_Project/main_page.html");
	$conn->close();
 ?>
