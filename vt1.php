<?php
$host="localhost";
$user="root";
$password="";
$db="fleetdemo";

mysqli_connect($host,$user,$password,$db);


if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$password=$_POST['password'];

	$sql="select * from user where username='".$uname."'AND password='".$password."'
	limit 1";

	$result=mysql_query($sql);

	if(mysql_num_rows($result)==1){
		echo "you have successfully logged in";
		exit();
	}
	else{
		echo "you have entered incorrect password";
		exit();
	}
}


?>
<!--
<!DOCTYPE html>
<html>
	<head>
		<title>login form design</title>
		<link rel="stylesheet" a href="css3\style.css"/>
		<link rel="stylesheet" a href="css3\font-awesome.min.css"/>
	</head>		
<body>
	<div class="container">
	   <img src="image\login.png">
	   <form method="POST" action="#">
	   		<div class="form_input">
	   			<input type="text" name="username" placeholder="Enter Your User Name"/>
	   		</div>
	   		<div class="form_input">
	   			<input type="password" name="password" placeholder="Enter Your User Password"/>
	   		</div>	
	   		<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
	   	</form>	
	</div>	
</body>
</html>	-->