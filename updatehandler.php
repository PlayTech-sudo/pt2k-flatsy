
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
   <?php
       $id=$_GET['edit'];
       $servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleetdemo";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
     $sql1=mysqli_query($con,"select * from handler where fleet_id='$id' ");
     $row=mysqli_fetch_array($sql1);?>

<div class="topnav">
            <a class="active" href="dashboard.php"></a>
            <a href="handler_management.php">Handler Management</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
          <form>
    <button type="submit" formaction="handler_management.php" style="margin:15px;height: 30px;width: 100px;cursor:pointer;border-radius:15px;
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;">
    Back</button>
</form>

<form method="post" action="updatehandler.php">  
<fieldset>
<input type="number" name="fleet_id" value="<?php echo $row['fleet_id'] ;?>" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required  >
    <br><br>
   <input type="text" name="handler_name" value="<?php echo $row['handler_name'];?>" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required  >
   <br><br>
  
  <input type="text" name="adress"  value="<?php echo $row['adress'];?> " style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required >
  <br><br>
  <input type="number" name="mobile_number" value="<?php echo $row['mobile_number'] ;?>" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required  >
    <br><br>
 
  <input type="submit" name="submit" value="update" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;cursor:pointer;background-color: #4CAF50" >&ensp; 
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
  $adress= $_POST["adress"];
  $mobile_number = $_POST["mobile_number"];
  

  $Query2="select count(*) from handler where fleet_id='$fleet_id'";
  $Execute = mysqli_query($conn,$Query2);
  $count = mysqli_fetch_row($Execute);

  if($count[0]==1)
  {
    $sql = "UPDATE handler SET fleet_id='$fleet_id' ,handler_name='$handler_name',adress='$adress',mobile_number='$mobile_number' WHERE fleet_id='$fleet_id';
    UPDATE fleet SET fleet_id='$fleet_id',handler_name='$handler_name' WHERE fleet_id='$fleet_id'";
    if ($conn->multi_query($sql) == TRUE) {
      echo'<div>
      <h1 style="color:#f2f2f2;font-size:20px; font-family: "Roboto", sans-serif;margin:auto;">'
      .$fleet_id. ' updated successfully</h1>
         </div>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  else{
    echo '<div>
    <h1 style="color:#f2f2f2;font-size:30px; font-family: "Roboto", sans-serif;margin:auto;">Given pet_id not found</h1>
       </div>';
}


$conn->close();
}

?>