<?php   
  require('db.php');
  $sql = "SELECT * FROM syllabus WHERE sem=1";
$query = mysqli_query($conn, $sql);
if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
?> 

<html>
<head>
<title>MCA syllabus</title>
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
	 		<li> <a href="#" style="text-decoration: none;"><font color="red"> Home </font></a></li>
	 		<li> <a href="tdetail.php" style="text-decoration: none;"><font color="red">Teachers </font></a></li>
	 		<li><a href="addsubject.php" style="text-decoration: none;"><font color="red">Add Subjects </font></a></li>
	 	</ul> 
	 	                    <li><a href="adminlogin.php" style="text-decoration: none;float:right ;margin:10px;margin-right:50px"><font color="red">Admin Login </font></a></li>
	
	 </div>
	 	<div id="main">
	 		<div id="first">
	 		
	 			<img src="1.jpg">
	 				<div id="sem">
	 			
	 					<h2 id="heading">SEMESTER 1</h2>
						<a href="c.php"><button class="button" type="button" onclick="">Click for Detail</button></a>
 
	 				</div>
	 		</div>
	 		<div id="second">

	 		
	 			<img src="3.jpg">
	 				<div id="sem">
	 			
	 					<h2 id="heading">SEMESTER 3</h2>
						<a href="OS.php"><button class="button" type="button" onclick="">Click for Detail</button></a>
 
	 				</div>
	 			
	 		</div>
	 		<div id="third">
	 			<img src="5.jpg">
	 			<div id="sem">
	 			
	 					<h2 id="heading">SEMESTER 5</h2>
						<a href="E Commerce.php"><button class="button" type="button" onclick="">Click for Detail</button></a>
 
	 				</div>
	 		</div>
	 	</div>

	</div>


</body>
</html>