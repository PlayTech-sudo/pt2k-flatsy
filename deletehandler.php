<html>
<head>
        <title>Handler Management</title>
        <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #484848;
  }
.topnav {
  overflow: hidden;
  background-color: #4CAF50;
  height: 70px;
  border: 3px solid green;
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


</style>
<body>
<div class="topnav">
<a class="active" href="dashboard.php"><img src="ic_add_pet.png"></a>
            <a href="handler_management.php">Handler Management</a>
          </div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleetdemo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$fleet_id=$_POST["t1"];

$Query2="select count(*) from handler where fleet_id='$fleet_id'";
$Execute = mysqli_query($conn,$Query2);
$count = mysqli_fetch_row($Execute);


if($count[0]==1)
{ 
    
    $sql = "DELETE FROM handler WHERE fleet_id='$fleet_id'";
    if ($conn->query($sql) == TRUE) {
        echo '<div>
    <h1 style="color:#f2f2f2;font-size:40px; font-family: "Roboto", sans-serif;margin:auto;">Data deleted successfully</h1>
       </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
    echo '<div>
    <h1 style="color:#f2f2f2;font-size:40px; font-family: "Roboto", sans-serif;margin:auto;"> Data not found</h1>
       </div>';
}
$conn->close();
?>

<body>
<html>