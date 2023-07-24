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
    $rollno = $_GET['Id'];
    $query = "SELECT * FROM requests where rollno='$rollno'";
    $query_run = mysqli_query($conn,$query);
   while($row = mysqli_fetch_assoc($query_run))
   {  
      $name   = $row['name'];
      $rollno = $row['rollno'];
      $grad   = $row['graduation'];
      $class  = $row['class'];
   }
?>
<html>    
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
pre u {    
    border-bottom: 3px dotted #000;
    text-decoration: none;
}
h1{
   text-align:center;
   margin-top:40px;
}
.myForm{
   background-image:url('https://previews.123rf.com/images/andipanggeleng/andipanggeleng1706/andipanggeleng170600014/80860153-blank-certificate-template.jpg');
   height:500px;
   width:700px;
   background-size:cover;
   position:absolute;
   left:20px;
   top:100px;
   -webkit-print-color-adjust: exact;
}
button{
   position:relative;
   left:42%;
   top:20%;
}
</style>
</head>
<body>
<div class="myForm">
<form>
<h1 style="font-size:40px; font-family:times new roman; font-weight:bold;"><u>BONAFIDE CERTIFICATE </u></h1>
<br /><br/>
<pre style="font-size:20px; font-family:times new roman;">
               This is to certify that Mr./Ms. <u><?php echo $name; ?></u> bearing 
                           <br />               rollno. <u><?php echo $rollno ?></u> of btech <u><?php echo $grad ?></u> year, class <u><?php echo $class; ?></u> He/She is a bonafide 
                           <br/>               student of Kakatiya Institute of Technology and Sciences.
</pre>
<br /><br /><br /><br />
<pre>
                                                             k.Ashok reddy
                                                         Signature of prinicipal
</pre>
</form>
<button onclick="window.print()" class="btn btn-primary">Click to print</button>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

   </body>
</html>

 