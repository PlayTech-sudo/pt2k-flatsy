<!doctype html>
<html>
  <head>
  <title>Purchase </title>
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
   <?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "fleetdemo";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);?>
  <div class="topnav">
            <a class="active" href="dashboard.php"></a>
            <a href="purchase.php">Purchase</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
<form>
    <button type="submit" formaction="purchase.php" style="margin:15px;height: 30px;width: 100px;cursor:pointer;border-radius:15px;
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;">
    Back</button>
</form>
  
<form method="post" action="addpurchase.php" >  
<fieldset>
   <input type="number" name="invoice_number" placeholder=" Enter invoice_number" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px; background:transparent;" required >
    <br><br>
 <!-- <input type="number" name="fleet_id"  placeholder="Enter fleet_id" style="width:300px;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required>
  <br><br> -->
   <select name="fleet_id" id="fleet_id" >
             <option value="0">Select Fleet Id</option>
                             <?php $query=mysqli_query($con,"select * from fleet");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
                                                 <option value="<?php echo $row['fleet_id'];?>"><?php echo $row['fleet_id'];?></option>
                  <?php } ?> 
                                            </select>
                                            <br><br>
  <input type="text" name="vehicle_part"  placeholder="Enter item name" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" required>

 <input type="text" name="description"  placeholder="Description" style="width:100%;height:30px;
   border: 2px solid  #4CAF50; border-radius:3px;background:transparent;" >
 
  
  <input type="number" name="amount"  placeholder="Enter amount" style="width:280px;height:30px;
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


if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "  CONNECTION ESTABLISHED \r\n";
//echo "  INSERTION IN PROCESS";
$invoice_number=$_POST["invoice_number"];
$fleet_id = $_POST["fleet_id"];
$vehicle_part = $_POST["vehicle_part"];
$description = $_POST["description"];
$amount = $_POST["amount"];


  
  

$sql = "INSERT INTO purchase(invoice_number,fleet_id,vehicle_part,description,amount)
VALUES ('$invoice_number','$fleet_id','$vehicle_part','$description','$amount')";
if ($con->multi_query($sql) == TRUE) {
  
  echo "inserted successfully ";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}



$con->close();
}

?>

