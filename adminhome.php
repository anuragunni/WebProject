<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="./style_home.css">
		<link href='https://fonts.googleapis.com/css?family=Gentium+Basic' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			#abc {
				position:relative;
				top:50px;
				font-size:24pt;
				left:40px;
				color:#355E3B;
				font-family:'Gentium Basic';
			}

		</style>
	</head>
	<body>
		<div class="container">
			<?php
				session_start();
				$servername="localhost";
				$username="root";
				$password="";
				$dbname= "test_1";
				$conn= new mysqli($servername,$username,$password,$dbname);
				if($conn->connect_error)
				  die("Connection failed");
				else
				{
					$extract="SELECT name FROM userdata WHERE isadmin = 0";
					$result =	mysqli_query($conn,$extract);//injects an sql query where the query is given by $extract
					echo "<p class='center'>Active Members</p>";
					echo "<p class='center'>";
					while($res=mysqli_fetch_assoc($result))//takes the result stored in $result and saves it as an associative array given by $res
						foreach($res as $x => $x_value){
							echo $x_value;
							echo "<br>";
						}
					echo "</p>";
				}
			?>
			<div class="box effect7">
				<form action="find_user.php"method="GET">
					<p id="abc" >Enter name:</p>
					<input id="pname"type="text" size="57" name="name" placeholder="Type the name of the user you wish to chat with"/>
					<input type="submit" class="button1" value="Submit" />
				</form>
			</div>
		</div>
	</body>
</html>
