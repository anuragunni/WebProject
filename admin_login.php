<?php
	session_start();

	$ad_email=$_POST["email"];//converts the
	$ad_password=password_hash($_POST["pwd"],PASSWORD_DEFAULT);;


	$servername="localhost";
	$username="root";
	$password="";
	$dbname= "test_1";

	$conn= new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
		die("Connecttion failed");
	else {
	 	$signincheck="SELECT name,password,id FROM userdata WHERE email='$ad_email'AND isadmin= TRUE";
		$result = 	mysqli_query($conn,$signincheck);//injects an sql query where the query is given by $signincheck
		$res=mysqli_fetch_assoc($result);//takes the result stored in $result and saves it as an associative array given by $res


				if (password_verify($res["password"],$ad_password))
				{
					$_SESSION["admin_email"]=$ad_email;//storing in session assoc array
					$_SESSION["admin_id"]=$res["id"];
					$_SESSION["admin_name"]=$res["name"];

         header("Location: ./adminhome.html");
        }
        else {
          header("Location: ./MainPage.html");
        }
      }
?>
