<?php
$host="localhost";
$user="root";
$password="";
$db="fleetdemo";

#mysqli_connect($host,$user,$password,$db);
mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql="select * from user where username='".$uname."'AND password='".$password."'
  limit 1";

  $result=mysql_query($sql);

  if(mysql_num_rows($result)==1){
    echo "you have successfully logged in";
    header('location:dashboard.php');
  }
  else{
    echo "you have entered incorrect password";
    exit();
  }
}


?>

<html>
<head>
<title>
	Fleet Automation System
</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;

    background-size: cover;
  background: #484848;
   background: -webkit-linear-gradient(right, #484848,#1a1a1a);
  background: -moz-linear-gradient(right, #1a1a1a,  #484848);
  background: -o-linear-gradient(right,#484848,#1a1a1a);
  background: linear-gradient(to left, #1a1a1a, #484848);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; 
  /*background-color:rgba(43, 3, 3, 0.945);*/
  
}
.topnav {
  overflow: hidden;
  background-color:rgb(73, 25, 21);
  height: 70px;
  border: 2px solid black;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 35px;
  font-weight: bold;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 8px 8px 0  #491915;
  border: 5px solid  #491915;
  border-radius: 3px; 
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background:rgba(249, 105, 14, 1);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  
}
.form button:hover,.form button:active,.form button:focus {
  background: rgba(249, 105, 14, 1);
}
	

</style>
</head>
<body>
    <div class="topnav">
            <a class="active" href="userlogin.php"></a>
            <a href="userlogin.php">Fleet Automation System</a>
          </div>
    <div class="login-page">
  <div class="form">
    <form class="login-form" action="#" method="POST">
      <h1>Login</h1>
      <input type="text" name="username" placeholder="username" required/>
      <input type="password"  name="password" placeholder="password" required/>
      <button type="submit"  name="t23" >login</button>
    </form>
  </div>
</div>
        

     
       
</body>	

</html>