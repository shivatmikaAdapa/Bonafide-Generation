<html>
<head>
<link href="s-a.css" rel="stylesheet">
<style>
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
a{
   text-decoration:none;
}
</style>
</head>
<body>
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
    $Name = $_POST["name"];
    $Rollno = $_POST["rollno"];
    $gradyr = $_POST["grad"];
    $Class = $_POST["class"];
    $certi = $_POST["certificate"];
    $status = "requested";
if($Name!="" && $Rollno!="" && $gradyr!="" && $Class !="" && $certi !=""){
echo "Your details are recorded and your certificate will be issued soon. Check the status below"; 
$query="insert into requests (name,rollno,graduation,class,certificate,  
status) values('$Name','$Rollno','$gradyr','$Class','$certi','$status')";
$run = mysqli_query($conn,$query); 
?>
<br/><br/><br/>
<div class="myDiv2">
<form action="studentreq.php" method="POST">
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
</form>
</div>
<?php
}
else{ ?>
   <div class="c-div">
   <p class="p-tag">Enter all the credentials correctly</p>
   <a href="student.php">Back</a>
  </div><?php
}
}
?>
</body>
</html>