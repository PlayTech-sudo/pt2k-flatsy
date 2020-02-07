<!--<?php
 session_start();
 if(isset($_SESSION['user']))
 {

 }
 else{
  echo"<script>location.href='login.html'</script>";
 }
?>-->
<!doctype html>
<html>
  <head>
  <title>Animals </title>
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
            <a href="fleet1.php">Fleet</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
          <form>
    <button type="submit" formaction="fleet1.php" style="margin:15px;height: 30px;width: 100px;cursor:pointer;border-radius:15px;
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;">
    Back</button>
</form>

  
<form method="post" action="addfleet.php" >  
<fieldset>
   <input type="number" name="fleet_id" placeholder=" Enter fleet_id" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px; background:transparent;" required >
    <br><br>
   <input type="text" name="fleet_name" placeholder="Enter fleet_name" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required>
   <br><br>
  
  <input type="text" name="fleet_type"  placeholder="Enter fleet_type" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required>
  <br><br>
  <input type="text" name="plate_number"  placeholder="Enter plate_number" style="width:280px;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required>
  
 <input type="text" name="category"  placeholder="Enter category" style="width:300px;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required>
  <br><br>
  <input type="text" name="sub_category"  placeholder="Enter sub_category" style="width:280px;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required>
 
  <input type="text" name="handler_name"  placeholder="Enter handler_name" style="width:300px;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required>
  <br><br>
  
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
  $fleet_name = $_POST["fleet_name"];
  $fleet_type= $_POST["fleet_type"];
  $plate_number = $_POST["plate_number"];
  $category = $_POST["category"];
  $sub_category = $_POST["sub_category"];
  $handler_name= $_POST["handler_name"];
  




$sql = "INSERT INTO fleet(fleet_id,fleet_name,fleet_type,plate_number,category,sub_category,handler_name)
VALUES ('$fleet_id','$fleet_name','$fleet_type','$plate_number','$category','$sub_category','$handler_name')";
if ($conn->multi_query($sql) == TRUE) {
  
  echo "inserted successfully ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
}

?>
