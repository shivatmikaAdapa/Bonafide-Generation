<html>
<head>
<link href="s-a.css" rel="stylesheet" />
<style>
.c-div{
    position:absolute;
    top:32%;
    left:35%;
    background-color:#ffffff;
    border:1px solid black;
    border-radius:10px;
    width:500px;
    height:270px;
    opacity:0.6;
    text-align:center;
    font-weight:bold;
    font-size:25px;
}
h1{
   text-align:center;
   margin-top:40px;
}
.p-tag{
    margin-top:100px;
}
a{
   text-decoration:none;
}
.l{
   opacity:0.6;
}
.certi{
   text-decoration:none;
   color:white;
   font-size:20px;
   position:absolute;
   top:630px;
   left:720px;
   text-shadow: 1px 1px 8px rgba(0,0,0,0.6); 
}
pre u {    
    border-bottom: 3px dotted #000;
    text-decoration: none;
}
.myForm{
   background-image:url('https://previews.123rf.com/images/andipanggeleng/andipanggeleng1706/andipanggeleng170600014/80860153-blank-certificate-template.jpg');
   height:500px;
   width:700px;
   background-size:cover;
   position:absolute;
   left:420px;
   top:100px;
}
p{
   margin-left:40px;
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
  if(isset($_POST["status"]) && $_POST["name"]!="" && $_POST["graduation"]!="" && $_POST["rollno1"]!="")
  {
   $rollno = $_POST["rollno1"];  
  $query = "select * from requests";
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($result)){
      if(($_POST["name"]==$row['name']) && ($rollno==$row['rollno']) && (strcmp($row['status'],"updated")==0))
  {
     $flag=1;
     ?><br><br><br>
<div class="myForm"> 
<form>
<h1 style="font-size:40px"><u>BONAFIDE CERTIFICATE </u></h1>
<br />
<?php $id = $row['rollno']; ?>
<pre style="font-size:20px; font-family:times new roman;">
               This is to certify that Mr./Ms. <u><?php echo $row['name']; ?></u> bearing 
                           <br />               rollno. <u><?php echo $row['rollno']; ?></u> of btech <u><?php echo $row['graduation']; ?></u> year, class <u><?php echo $row['class']; ?></u> He/She is a bonafide 
                           <br/>               student of Kakatiya Institute of Technology and Sciences.
</pre>
<br /><br /><br /><br />
<pre>
                                                                       k.Ashok reddy
                                                                  Signature of prinicipal
</pre>
</form>
</div>
<a href="certi.php?Id=<?=$id?>" class="certi">Download</a>
<?php 
break;
}
 else{
      $flag=0;
      if(($_POST["name"]==$row['name']) && ($rollno==$row['rollno']) && (strcmp($row['status'],"requested")==0))
      {  $flag=1;?> 
           <div class="c-div">
           <p class="p-tag">Your request is being processed.</p>
           <a href="student.php">back</a>
           </div>
      <?php
        break;
      }
  }
}
if($flag==0){ ?>
   <div class="c-div">
      <p class="p-tag">Enter the credentials properly</p>
      <a href="student.php">back</a>
   </div>
   <?php
}
}
else
{?>
   <div class="c-div">
   <p class="p-tag">Enter the Details</p>
   <a href="student.php">Back</a>
   </div> 
<?php
}
?>
</html>