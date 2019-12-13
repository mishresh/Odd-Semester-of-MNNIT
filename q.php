<?php 
  session_start(); 
  require('db.php');
   
  if (!isset($_SESSION['reg_no'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: sem.php');
  }

$sql = 'SELECT * FROM teachers ';
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}

?>


<html>
<head>
<style>
.container {
    padding: 16px;
}
body  {
    background-image: url("bac.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
}

table,th,td{
    border: 1px solid blue;
}

th {
    text-align: left;
}
.tab
{
	border-collapse : collapse;
  
}
</style>

</style>
</head>
<body>
 <div class="container">
<h1><marquee style="color:blue;">MNNIT PRAYAGRAJ</marquee></h1>




<?php
  
    while ($row = mysqli_fetch_array($query))
    {
     echo  ' <div align="center">
<table class="tab" style="width:50%;">
<tr>
    <th style="width:30%">Teacher id:</th>
    <td>'.$row['tid'].'</td> 
    
  </tr>
  <tr>
    <th >Name:</th>
    <td>'.$row['tname'].'</td>
    
  </tr>
  <tr>
    <th>Area of Interest:</th>
    <td>'.$row['tsubject'].'</td>
    
  </tr>
    <tr>
    <th>Semester:</th>
    <td>'.$row['tsem'].'</td>
    
  </tr>
  <tr>
    <th>Description:</th>
    <td>'.$row['description'].'</td>
    
  </tr>
  <tr>
    <th>Email :</th>
    <td>'.$row['temail'].'</td>
    
  </tr>
  <tr>
    <th>Phone No:</th>
    <td>'.$row['tmobile'].'</td>
    
  </tr>
</table></div><br><br>';
 }?>

</body>
</html>
