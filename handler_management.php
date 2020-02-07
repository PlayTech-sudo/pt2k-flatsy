<html>
    <head>
        <title>Handler Managemnet</title>
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
.t{
  width:80%;
height:80%;
float:left;

object-fit: contain;
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
            <a href="handler_management.php">Handler Management</a>
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
$var=mysqli_query($con,"select h.fleet_id,h.handler_name,h.adress,h.mobile_number from handler h ");?>
<table border size=10>;
<tr>

<th>Fleet Id</th>
<th>Handler Name</th>
<th>Adress</th>
<th>Mobile Number</th>
<th>Action</th>

</tr><?php
if(mysqli_num_rows($var)>0){
    while($arr=mysqli_fetch_row($var))
    : ?><tr>
    <td><?php echo $arr[0]; ?></td>
    <td><?php echo $arr[1]; ?></td>
    <td><?php echo $arr[2]; ?></td>
    <td><?php echo $arr[3]; ?></td>

   
    <td><a href="updatehandler.php?edit=<?php echo $arr[0]; ?>">Edit</a></td>
    </tr><?php endwhile;?>
    </table><?php
    mysqli_free_result($var);
}

mysqli_close($con);
    
    
?>


</body>
</html>