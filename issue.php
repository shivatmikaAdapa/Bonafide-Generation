<html>
<head><title>issue</title>
<style>
   html{
    background-image:url('https://cdn.wallpapersafari.com/55/73/ghY4rc.jpg');
    height:100vh;
    background-size:cover;
   }  
   th{
     color:white;
     background-color:black;
   }
   table, th{
     border: 0.5px solid black;
   }
   table{
      position:relative;
      left:30%;
   }
   td{
     background-color:lightgreen;
   }
   input{
     border:0px solid black;
   }
   a{
      text-decoration:none;
      color:white;

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
echo "connection success"; 
  if(isset($_POST['submit1']))
  {
    $admin=$_POST['admin']; 
    $password = $_POST['pass'];
   $query = "SELECT * FROM requests where status='updated' OR status='requested'";
   $query_run = mysqli_query($conn,$query);
   ?>
    <table>
   <tr>  <th>Name</th>
         <th>Rollno</th>
         <th>Graduation Year</th>
         <th>class</th>
         <th>certificate</th>  
         <th>status</th>
         <th>Issue</th>
   </tr>
   <?php
     while($row = mysqli_fetch_assoc($query_run))
   {  
      $id = $row['rollno'];
?>
   <tr>
         <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['rollno']; ?></td>
         <td><?php echo $row['graduation']; ?></td>
         <td><?php echo $row['class']; ?></td> 
         <td><?php echo $row['certificate']; ?></td> 
         <td><?php echo $row['status']; ?></td> 
         <td style="background-color:red;" colspan="2" align="right"><a href="update.php?updateId=<?=$id?>">Issue</a></td>
   </tr>
      <?php 
   }
}
?>
</html>