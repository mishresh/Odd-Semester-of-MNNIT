<?php 
 
  require('db.php');
   

$sql = 'SELECT * FROM teachers where tsem = 5';
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}

?>


<html lang="en">
<head>
<title>MCA syllabus</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

/* Style the body */
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}

/* Header/logo Title */
.header {
    padding: 80px;
    text-align: center;
    background: #1abc9c;
    color: white;
}

/* Increase the font size of the heading */
.header h1 {
    font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
    overflow: hidden;
    background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
    float: right;
}

/* Change color on hover */
.navbar a:hover {
    background-color: #ddd;
    color: black;
}

/* Column container */
.row {  
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
    -ms-flex: 30%; /* IE10 */
    flex: 30%;
    background-color: #f1f1f1;
    padding: 20px;
}

/* Main column */
.main {   
    -ms-flex: 70%; /* IE10 */
    flex: 70%;
    background-color: white;
    padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-image: url(images/mnnit.jpg) ;
    width: 100%;
    padding: 20px;
    min-height: 500px;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
}

.parallax {
    /* The image used */
    background-image: url(images/book1.jpg) ;
    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
table,th,td{
    border: 0px solid black;
}

th {
    text-align: left;
}
.tab
{
  border-collapse : collapse;
  
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
    .row {   
        flex-direction: column;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .navbar a {
        float: none;
        width: 100%;
    }
}
</style>
</head>

<body>
<table style="background-color:#FFFFFF;width:100%;opacity:.9;"><tr><td>
   <div id="full">
   <a name="top"> </a>
   <table style="width:100%; hight:150px;">
   <tr><td>
   <div style=""><img src="11.PNG" height="150" width="125"/></div></td><td><div style="font-size:40px;">
   <b>Computer &nbsp;&nbsp;Science &nbsp;&nbsp;&amp;&nbsp;&nbsp; Engineering&nbsp;&nbsp; Department(CSED)</b>
   </br><i>Motilal Nehru National Institute of Technology Allahabad</i></div>
   </td></tr>
   </table>
<div class="parallax">
<div class="navbar">
  <a href="sem.php">Home</a>
  <a href="tdetail.php">Teachers</a>
  <a href="adminlogin.php" class="right">Admin Login </a>
</div>
<br><center>
          <div style="color:black ;width:80%;border-radius: 30px; padding: 0px 0px 0px 100px;background-color:grey;opacity: 0.8; ">

	 	<div id="main"><br>
      <br><div style="color:white ;border-radius: 20px; padding: 0px 250px 0px 0px;background-color:black;opacity: 0.8; ">
      <h1 id="heading">Teacher's Details</h1>
      </div>
	 		<br>
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

	</div></center>
	</div>
	</div>

</body>
</html>