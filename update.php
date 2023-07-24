<html>
<head>
<style>
html{
    background-image:url('https://cdn.wallpapersafari.com/55/73/ghY4rc.jpg');
    height:100vh;
    background-size:cover;
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
a{
   text-decoration:none;
}
</style></head>
<?php 
      $server = "localhost";
      $username = "root";
      $password = "";
      $database="certificate";
      $conn = mysqli_connect($server,$username,$password,$database);
      if(mysqli_connect_errno())
      {
         echo "failed to connect";
         exit();
      }
      $rollno = $_GET['updateId'];
      $query = "update requests set status='updated' where rollno='$rollno'";
      $query_run = mysqli_query($conn,$query);
      if($query_run)
      { ?>
          <div class="c-div">
            <p class="p-tag">Status Updated</p>
            <a href="admin.php">Back</a>
            </div> 
         <?php
            
      }
      
?>         
</html>