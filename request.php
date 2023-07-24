<html>
<head><title>request</title>
<link rel="stylesheet" href="s-a.css" type="text/css" /> 
<style>
a{
   text-decoration:none;
}
h1{
   text-align:center;
   color:white;
   text-shadow: 1px 1px 8px rgba(0,0,0,0.6);
   margin-top:180px;
}
.c-div{
    position:absolute;
    top:32%;
    left:35%;
    background-color:#ffffff;
    border:1px solid black;
    border-radius:10px;
    opacity:0.6;
    width:500px;
    height:270px;
    text-align:center;
    font-weight:bold;
    font-size:25px;
 }
.p-tag{
    margin-top:100px;
}
</style>
</head>
<?php 
   $hostname="localhost";
  $username="root";
  $password="";
  $database="certificate";
$conn = mysqli_connect($hostname,$username,$password,$database);
if(mysqli_connect_errno())
{
   echo "failed to connect";
   exit();
} 
if(isset($_POST["submit"]))
  {
    $rollno=$_POST["rollno"]; 
    $password = $_POST["pass"];
$query = "select * from login where Rollno='$rollno' AND password='$password'";  
   $query_run = mysqli_query($conn,$query);
   if(mysqli_num_rows($query_run)>0)
   { 
?> 
<h1 style="font-size:30px">Request Form</h1>
<form class="form1" action="request_db.php" method="POST">
<table cellspacing="20" cellpadding="10" border="2"> 
   <tr>  <th>Name</th>
<td><input type="text" name="name"></td> </tr>
   <tr> <th>Rollno</th>
<td><input type="text" name="rollno"></td></tr>
   <tr> <th>graduation year</th>
<td><input type="text" name="grad"></td> </tr>
   <tr> <th>class</th>
<td><input type="text" name="class"></td> </tr> 
   <tr> <th>certicate requested</th>
<td>
<select name="certificate" id="certi">
<option value="bonafide">Bonafide</option>
<option value="study">study certificate</option> 
</select>
</td></tr>
<tr>
<td colspan="2" align="right"><input class="submit" type="submit" name="submit"></td>
</tr>
</table>
</form>
<?php
}
else
{
?>
   <div class="c-div">
   <p class="p-tag">Enter the correct credentials</p>
   <a href="student.php">Click on back</a>
   </div> <?php
}
}
if(isset($_POST["status"]))
  {
    $rollno=$_POST["rollno"]; 
    $password = $_POST["pass"];
$query = "select * from login where Rollno='$rollno' AND password='$password'";  
   $query_run = mysqli_query($conn,$query);
   if(mysqli_num_rows($query_run)>0)
   { 
?>

<form class="form2" action="studentreq.php" method="POST">
<table cellspacing="20" cellpadding="10" border="2"> 
<tr>
  <th>Name</th>
  <td><input type="text" name="name"></td></tr>
<tr>
  <th>Graduation</th>
  <td><input type="text" name="graduation"></td></tr>
<tr>
  <th>Rollno</th>
  <td><input type="text" name="rollno1"></td></tr>
<tr>
<td colspan="2"><input class="submit" type="submit" name="status" value="Check Status"></td>
</tr>
</table>
<?php }
else
{  ?>
   <div class="c-div">
   <p class="p-tag">Enter the correct credentials</p>
   <a href="student.php">Back</a>
   </div> <?php
}
}   
?>
</form>
</html>