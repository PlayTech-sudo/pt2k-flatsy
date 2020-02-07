<!doctype html>
<html>
    <head>
        <title>
            Fleet automation
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>



.topnav {
  overflow: hidden;
  background-color:rgb(73, 25, 21);
  height: 70px;
  border: 2px solid black;
}
.topnav-right {
  float: right;
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

*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin-left: 10%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
  width: 100%;

  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  


 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }


.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 15px;
  margin-bottom: 10px;
  background-color: white;
  border:2px solid black;
  border-radius: 5px;
  padding:10px;
  width:50%;
  font-size:19px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}



</style>
    </head>
    <body>

        <div class="topnav">
            <a class="active" href="dashboard.php"></a>
            <a href="dashboard.php">Fleet Automation</a>
            <div class="topnav-right">
              <a href="logout.php">logout</a>
            </div>
          </div>
      

       
     <div class="main">

 <!--cards -->






<div class="card">

<div class="image">
   <img src="f5.png">
</div>

<div class="des">
 <form>
<button class="button"  type="submit" formaction="fleet1.php"> Fleet </button>
</form>
</div>
</div>

<!--cards -->


<div class="card">

<div class="image">
   <img src="f7.png">
</div>

<div class="des">
 <form>
<button class="button"  type="submit" formaction="inventory.php">Inventory </button>
</form>
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="f4.png">
</div>

<div class="des">
<form>
<button class="button"  type="submit" formaction="expense.php">Expense </button>
</form>
</div>
</div>
<!--cards -->
</div>
<div class="main">
<div class="card">

<div class="image">
   <img src="fuel.png">
</div>
<div class="des">
  <form>
 <button class="button"  type="submit" formaction="fuel_entry.php">Fuel Entry </button>
</form>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="f6.png">
</div>

<div class="des">
  <form>
<button class="button"  type="submit" formaction="handler_management.php">Handler Management </button>
</form>
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="f1.png">
</div>

<div class="des">
  <form>
 <button class="button"  type="submit" formaction="purchase.php">Purchase</button>
</form>
</div>
</div>
</div>
</body>
</html>
