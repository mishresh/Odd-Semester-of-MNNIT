<?php 
 
  require('db.php');
   

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
    margin-left:  : 10%;
     margin-right:  : 10%;
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
<title>cricket website</title>
<link type="text/css" href="mystyle1.css" rel="stylesheet"/>
</head>
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 50%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    margin-top: 205px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;

    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

</style>
</head>

<body>

 <div class="container">
	<div id="wrap">
	
	 <div id="header">	    
		<div align="center"><img src="logo.png"/><font size="5"  style="width:300px;margin:30px;background-color:hotpink;opacity:0.9;border:solid 5px #3385ff;border-radius: 70px;postion:relative;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Syllabus Portal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
	</div> </div> 
<!-- 	 	<div id="mySidenav" class="sidenav">
 --><!--   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 -->  <!-- <a href="#">semester 1 subjects</a> -->
 
<!-- </div>
 -->

	 <div id="menu">
	 	<ul>
	 		<li> <a href="sem.php" style="text-decoration: none;"><font color="red"> Home </font></a></li>
	 		<li> <a href="allteachers.php" style="text-decoration: none;"><font color="red">Teachers </font></a></li>
	 		<li><a href="addsubject.php" style="text-decoration: none;"><font color="red">Add Subjects </font></a></li>
	 	</ul> 
	 	                    <li><a href="adminlogin.php" style="text-decoration: none;float:right ;margin:10px;margin-right:50px"><font color="red">Admin Login </font></a></li>
	
	 </div>
	 	<div id="main">
	 		
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

	 			

	 		

	</div>
	</div>
	</div>

</body>
</html>