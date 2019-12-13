<?php 
  session_start(); 
  require('db.php');
   
  if (!isset($_SESSION['reg_no'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: sem.php');
  }

$sql = 'SELECT * FROM teachers ';
if(isset($_GET['sort'])){
    if($_GET['sort']=='tid')
    {
    	$sql .= 'order by tid';
    }
    elseif($_GET['sort']=='tname')
    {
    	$sql .= 'order by tname';
    }
    elseif($_GET['sort']=='tsubject')
    {
    	$sql .= 'order by tsubject';
    }
    elseif($_GET['sort']=='tmobile')
    {
    	$sql .= 'order by tmobile';
    }
    elseif($_GET['sort']=='temail')
    {
    	$sql .= 'order by temail';
    }
    elseif($_GET['sort']=='tsem')
    {
    	$sql .= 'order by tsem';
    }
    
}
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

img {
  border-radius: 60%;
}

{
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.parallax {
    /* The image used */
    background-image: url(images/book16.jpg) ;

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    /*opacity: 0.2;*/
}
.topnav {
  margin-left: 180px;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: grey;
  color: white;
}

.sidenav {
    height: 100%;
    width: 180px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #40CEEA;
    display: block;
}

.sidenav a:hover {
    color: #ADF179;
}

.main {
    margin-left: 180px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

table.blueTable {
  border: 1px solid #309BA4;
  background-color: #E2EBEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.blueTable td, table.blueTable th {
  border: 2px solid #AAAAAA;
  padding: 3px 7px;
  font-size: 20px;
}
table.blueTable tbody td {
  font-size: 16px;
  color: #404D4D;
}
table.blueTable tr:nth-child(even) {
  background: #EEF5F2;
}
table.blueTable thead {
  background: #BFBFBF;
  background: -moz-linear-gradient(top, #cfcfcf 0%, #c5c5c5 66%, #BFBFBF 100%);
  background: -webkit-linear-gradient(top, #cfcfcf 0%, #c5c5c5 66%, #BFBFBF 100%);
  background: linear-gradient(to bottom, #cfcfcf 0%, #c5c5c5 66%, #BFBFBF 100%);
}
table.blueTable thead th {
  font-size: 16px;
  font-weight: bold;
  color: #402424;
  text-align: center;
  border-left: 2px solid #BFBFBF;
}
table.blueTable thead th:first-child {
  border-left: none;

}

table.blueTable tfoot td {
 font-size: 20px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}

.topnav .right {float: right;}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    .topnav li.right,
  }

.button {
  display: inline-block;
  padding: 05px 10px;
  font-size: 10px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: black;
  background-color: #85C1E9;
  border: none;
  border-radius: 10px;
  box-shadow: 0 4px #999;
}

.button:hover {background-color: #D0D3D4}

.button:active {
  background-color: #7FFF00  ;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
table tbody tr td {
  font-size: 24px;
}
</style>
</head>
<body>
<div class="parallax">
<div class="topnav">

  <a href="allsubjects.php">All Subjects</a> 
  <a href="allteachers.php">All Teachers</a>
  <a class="right" href="adminlogin.php?logout='1'">Logout</a>
</div>
<div style="padding-left:180px">

</div>

<br><br>
<div class="sidenav">
 
   <font size="5" color="red"><?php echo ' Welcome Admin' ?></font>

  
  </center>
  <br><br><br>
  <a href="addsubject.php">Add Subjects</a>
  <a href="addteacher.php">Add Facualty</a>
</div>
<div  style="padding-left:260px; padding-right:100px">
<div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:white;opacity: 0.8;">
<div style="padding-center:0px; padding-left:50px; color: MidnightBlue; font-size: 20px; text-shadow: -1px 0 black, 0 1px OrangeRed, 1px 0 gold, 0 -1px red;">
  <h2>All Teacher's Details </h2>
  </div></div>


<div style="color:black ;border-radius: 20px; padding: 70px 0px 70px 70px;background-color:white;opacity: 0.8;">
   
    <div style="padding-center:0px; padding-left:0px;padding-right:60px; color: Black ;width:80%;height:auto ;">
<table class="blueTable">
<thead>

<tr>
<th>S.No.</th>
<th><a href="allteachers.php?sort=tid">Teacher Id</a></th>
<th><a href="allteachers.php?sort=tname"> Teacher Name</a></th>
<th><a href="allteachers.php?sort=tsubject">Subject</a></th>
<th><a href="allteachers.php?sort=tsem">Semester</a></th>
<th><a href="allteachers.php?sort=description">Description</a></th>
<th><a href="allteachers.php?sort=temail">Email</a></th>
<th><a href="allteachers.php?sort=tmobile">Mobile</a></th>
<th>Update </th>
<th>Delete</th>
</tr>
</thead>
<tbody >

<!-- new edition start -->
<!-- <tbody> -->
    <?php
    $no   = 1;
    $total  = 0;
    $a=1;
    $b=1;  /*for book id */
    while ($row = mysqli_fetch_array($query))
    {
      echo '<tr>
          <td>'.$no.'</td>
          <td  >'.$row['tid'].'</td>
          <td style="width:10px;height:auto;" id="'.$a.'">'.$row['tname'].'</td>
          <td >'.$row['tsubject'].'</td>
          <td>'.$row['tsem'].'</td>
          <td>'.$row['description'].'</td>

          <td>'.$row['temail'].'</td>
          
          <td>'.$row['tmobile'].'</td>
          <td><form action="editteacher.php" method="POST"><input style="display:none" type="text" name="passval" value="'.$row['tid'].'"><input class="button button2" type="submit" value="Edit" name="'.$a.'"></form></td>
          <td><form action="deleteteacher.php" method="POST"><input style="display:none" type="text" name="passval" value="'.$row['tid'].'"><input  class="button button2" type="submit" value="Delete" name="'.$a.'"></form></td>

        </tr>';
      
      $no++;
      $a++;
    }?>
    </tbody>
</table>
<!-- new end -->

</div>
     
	 
	 <div  style="padding-left:180px">
	 <br><br>
	 <footer class="footer">
      <div class="text-center text-muted">
        <p><center>&copy; Creative Mishresh. All rights reserved.</center></p>
      </div>
    </footer>
	 
</body>
</html> 
