<?php
	session_start();

	$client_email=$_POST["email"];//converts the
	$client_password=password_hash($_POST["pwd"],PASSWORD_DEFAULT);;

	//echo $client_email.$client_password;
	$servername="localhost";
	$username="root";
	$password="";
	$dbname= "test_1";

	$conn= new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
		die("Connecttion failed");
	else {
	 	$signincheck="SELECT name,password,id FROM userdata WHERE email='$client_email'";
		$result = 	mysqli_query($conn,$signincheck);//injects an sql query where the query is given by $signincheck
		$res=mysqli_fetch_assoc($result);//takes the result stored in $result and saves it as an associative array given by $res


				if (password_verify($res["password"],$client_password))
				{
					$_SESSION["email"]=$client_email;//storing in session assoc array
					$_SESSION["id"]=$res["id"];
					$_SESSION["uname"]=$res["name"];
					header("Location:http://localhost/WP_Project/Home-Page.php");
				}	else
				{
					header("Location:http://localhost/WP_Project/MainPage.html");
						}
	}

	$conn->close();
?>
