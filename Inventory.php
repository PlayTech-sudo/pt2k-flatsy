<!--<?php
 session_start();
 if(isset($_SESSION['user']))
 {

 }
 else{
  echo"<script>location.href='userlogin.php'</script>";
 }
?>-->
<html>
    <head>
        <title>Inventory </title>
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
.t{
  width:80%;
height:80%;
float:left;

object-fit: contain;
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse; outline: green solid 5px;
    background: #FAFAFA;
    margin:5px ;
    width:100%;
}

td, th {
    border: 2px solid #dddddd;
    text-align: left;
    padding: 8px;
}
th{
  background-color: #4CAF50;
}


.custombutton{
  margin:25px;
  
}input[type=text] {
    width: 15%;
    padding: 12px 20px;
    margin: 8px ;
    background:transparent;
    border: 2px solid red;
    color:#f2f2f2;
}


        </style>
</head>
<body>

<div class="topnav">
            <a class="active" href="dashboard.php"><img class="t" src="back4.png"></a>
            <a href="inventory.php">inventory</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
           
    
    <?php
   
$con = mysqli_connect("localhost","root","","fleetdemo");
if(!$con)
{ 
die("could not connect".mysql_error());
}
$var=mysqli_query($con,"select f.fleet_id,f.fleet_name,f.fleet_type,f.plate_number,f.category,f.sub_category,f.handler_name,e.status from fleet f ,expense e where f.fleet_id=e.fleet_id");
echo "<table border size=10>";
echo "<tr>
<th>Fleet Id</th>
<th>Fleet Name</th>
<th>Fleet Type</th>
<th>Plate Number</th>
<th>Category</th>
<th>Sub-Category</th>
<th>Handler Name</th>
<th>Status</th>
</tr>";
if(mysqli_num_rows($var)>=0){
    while($arr=mysqli_fetch_row($var))
    { echo "<tr>
    <td>$arr[0]</td>
    <td>$arr[1]</td>
    <td>$arr[2]</td>
    <td>$arr[3]</td>
    <td>$arr[4]</td>
    <td>$arr[5]</td>
    <td>$arr[6]</td>
    <td>$arr[7]</td>
    </tr>";}
    echo "</table>";
    mysqli_free_result($var);
}

mysqli_close($con);
    
    
?>


</body>
</html>