
<!doctype html>
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

.t{
  width:80%;
height:80%;
float:left;

object-fit: contain;
}
.topnav-right {
  float: right;
}
fieldset { 
	background: white;
	padding: 10px;
   margin:auto;
   max-width:593px;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #4CAF50;


}
      </style>
</head>
<body>
  <div class="topnav">
            <a class="active" href="dashboard.php"></a>
            <a href="handler_management.php">Handler Management</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>

  <form>
    <button type="submit" formaction="fleet1.php" style="margin:15px;height: 30px;width: 100px;cursor:pointer;border-radius:15px;
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;">
    Back</button>
</form>
<form method="post" action="addhandler.php" >  
<fieldset>

   <input type="number" name="fleet_id" placeholder=" Enter fleet_id" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px; background:transparent;" required >
    <br><br>
   <input type="text" name="handler_name" placeholder="Enter handler_name" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required>
   <br><br>
  
  <input type="text" name="adress"  placeholder="Enter adress" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required>
  <br><br>
  <input type="number" name="mobile_number"  placeholder="Enter mobile_number" style="width:280px;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required>
  

  
  <input type="submit" name="submit" value="save" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px; cursor:pointer;background-color: #4CAF50" >&ensp; 
  </fieldset>
</form> 
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
  // define variables and set to empty values
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
$fleet_id = $_POST["fleet_id"];
  $handler_name = $_POST["handler_name"];

  $adress = $_POST["adress"];
  $mobile_number= $_POST["mobile_number"];
  




$sql = "INSERT INTO handler(fleet_id,handler_name,adress,mobile_number)
VALUES ('$fleet_id','$handler_name','$adress','$mobile_number')";
if ($conn->multi_query($sql) == TRUE) {
  
  echo "inserted successfully ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
}

?>
