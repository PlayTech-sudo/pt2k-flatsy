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
        <title>Fleet </title>
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

.t{
  width:80%;
height:80%;
float:left;

object-fit: contain;
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
            <a href="fleet1.php">Fleet</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
           
    
 <div class="custombutton">   
<form>
<button  style="  height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;"formaction="addfleet.php">Add new fleet Information</button>
<button  style="  height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;"formaction="addhandler.php">Add handler Information</button>


<!--
<button   style="margin-left:900px; height: 50px;width: 150px;cursor:pointer;border-radius:15px;
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;" 

formaction="updatefleet.php">update</button>
-->
</form>
</div>
    <?php
   
$con = mysqli_connect("localhost","root","","fleetdemo");
if(!$con)
{ 
die("could not connect".mysql_error());
}
$var=mysqli_query($con,"select f.fleet_id,f.fleet_name,f.fleet_type,f.plate_number,f.category,f.sub_category,f.handler_name from fleet f ");?>
<table border size=10>
<tr>
<th>Fleet Id</th>
<th>Fleet Name</th>
<th>Fleet Type</th>
<th>Plate Number</th>
<th>Category</th>
<th>Sub-Category</th>
<th>Handler Name</th>
<th colspan="2">Action</th>
</tr>
<?php
if(mysqli_num_rows($var)>0){
    while($arr=mysqli_fetch_row($var)): ?> <tr>
    <td><?php echo $arr[0] ;?></td>
    <td><?php echo $arr[1] ;?></td>
    <td><?php echo $arr[2] ;?></td>
    <td><?php echo $arr[3] ;?></td>
    <td><?php echo $arr[4] ;?></td>
    <td><?php echo $arr[5] ;?></td>
    <td><?php echo $arr[6] ;?></td>
    

    <td><a href="deletefleet.php?delete=<?php echo $arr[0] ; ?>" >Delete </a></td>
    <td><a href="editfleet.php?update=<?php echo $arr[0]; ?>">Edit</a></td>
   </tr><?php endwhile; ?>
    </table>
   <?php mysqli_free_result($var);
}

mysqli_close($con);
    
    
?>

<!-- <div class="lastblock" style="margin-top:25px;">
<form action="deletefleet.php" method="post">
    <input  id="dbutton" type="text" name="t1" placeholder="Enter the id to delete" required>
    <input  style="width:75px;height:44px;cursor:pointer;border-radius:15px;
border: 3px solid green;background-color: #4CAF50;color:#f2f2f2;font-size:17px;"type="submit" value="Delete">

</form> 
</div> -->

</body>
</html>