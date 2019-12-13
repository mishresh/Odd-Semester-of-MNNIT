<!-- <table style="background-color:blue;width:100%;opacity:.9;"><tr><td>
   <div id="full" >
   <a name="top"> </a>
   <table style="width:100%; hight:150px;">
   <tr><td>
   <div style=""><img src="images/Logo1.png" height="150" width="200"/></div></td><td><div style="font-size:50px;">
   <b style="color:yellow">Jai&nbsp;&nbsp; Devi &nbsp;&nbsp;Sunder &nbsp;&nbsp;Lal &nbsp;&nbsp;Inter &nbsp;&nbsp;College  </b>
   </br><i style="color:pink">Gurudeen Kheda Unnao</i></div>
   </td></tr>
   </table> -->


<?php   
  require('db.php');
  $sql = "SELECT * FROM syllabus WHERE sem=1";
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
    min-height: 700px;
	 background-size: cover;
}
.button {
    background-color: #b3003b;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    
    margin-left: 60px;
    margin-right: 100px;
    margin-top: 10px;
    cursor: pointer;
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
#sem{
  float: right;
  margin-right: 100px;
  margin-top: 50px;
  height: 150px;
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
  <a href="aboutme.php">About</a>
  <a href="adminlogin.php" class="right">Admin Login </a>
</div>
<br>
	 
<!-- 	 	<div id="mySidenav" class="sidenav">
 --><!--   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 -->  <!-- <a href="#">semester 1 subjects</a> -->
 
<!-- </div>
 --><div class="fakeimg" style="height:200px;"></div>

	 	<div id="main">
	 		<div style="color:white ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:black;opacity: 0.8; ">
	 			<br><div style="color:white ;border-radius: 20px; padding: 0px 0px 0px 100px;background-color:grey;opacity: 0.8; ">
	 		<h2 id="heading">SEMESTER 1</h2>
	 		</div>
	 		<div id="first";>
	 		<div style="padding: 50px 50px 50px 100px;">
	 			<img src="1.jpg">
	 				<div id="sem" >
	 			<table>
	 					<tr><td>
						<a href="c.php"><button class="button" type="button" onclick="">Click for Detail</button></a>
          </td></tr><tr><td>
            <a href="tdetail1.php"><button class="button" type="button" onclick="">Teacher Detail</button></a>
          </td></tr>
        </table>
 </div>
	 				</div>
	 		</div>
	 	</div>
	 	<br>
	 	<div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:black;opacity: 0.8; ">
<br><div style="color:white ;border-radius: 20px; padding: 0px 0px 0px 100px;background-color:grey;opacity: 0.8; ">
	 		<h2 id="heading">SEMESTER 3</h2>
	 		</div>
	 		<div id="second">
<div style="padding: 50px 50px 50px 100px;">
	 		
	 			<img src="3.jpg">
	 				<div id="sem">
	 			
			   <table>
            <tr><td>
            <a href="OS.php"><button class="button" type="button" onclick="">Course Detail</button></a>
          </td></tr><tr><td>
            <a href="tdetail3.php"><button class="button" type="button" onclick="">Teacher Detail</button></a>
          </td></tr>
        </table>
 </div>
	 				</div>
	 			</div>
	 		</div><br>
	 		<div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:black;opacity: 0.8; ">
<br><div style="color:white ;border-radius: 20px; padding: 0px 0px 0px 100px;background-color:grey;opacity: 0.8; ">
	 		<h2 id="heading">SEMESTER 5</h2>
	 		</div>
	 		<div id="third">
	 			<div style="padding: 50px 50px 50px 100px;">
	 			<img src="5.jpg">
	 			<div id="sem">
	 			
				  <table>
            <tr><td>
            <a href="E Commerce.php"><button class="button" type="button" onclick="">Course Detail</button></a>
          </td></tr><tr><td>
            <a href="tdetail5.php"><button class="button" type="button" onclick="">Teacher Detail</button></a>
          </td></tr>
        </table>
 </div>
	 				</div>
	 		</div>
	 	</div>
</div>

</div>

<div class="row">
  <div class="side">
          <div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:grey;opacity: 0.8; ">
<center>
      
      
      <h2>About </h2></center>
      <p div style="padding: 10px 20px 10px 20px;"><b>Motilal Nehru National Institute of Technology Allahabad, Prayagraj (MNNIT)</b> is an Institute with total commitment to quality and excellence in academic pursuits. It was established as one of the seventeen Regional Engineering Colleges of India in the year 1961 as a joint enterprise of Government of India and Government of Uttar Pradesh, and was an associated college of University of Allahabad, which is the third oldest university in India.
        For a short duration of two years (2000-2002), the Institute was affiliated to U.P. Technical University. With over 45 years of experience and achievements in the field of technical education, having traversed a long way, on June 26, 2002 MNREC was transformed into National Institute of Technology and Deemed University fully funded by Government of India. With the enactment of National Institutes of Technology Act-2007(29 to 2007), the Institute has been granted the status of institution of national importance w.e.f. 15.08.2007.
        The Institute had begun with offering Bachelor Degree Programmes in Civil, Electrical and Mechanical Engineering. It was the first in the country to start an undergraduate programme in Computer Science & Engineering in 1976-77. Subsequently, in the year 1982-83 undergraduate programmes in Electronics Engineering and Production & Industrial Engineering were started.The first Master’s Programme of the Institute was introduced by the Mechanical Engineering Department in the year 1966. In all other Engineering Departments, Master's Programmes were introduced in the 1970-71. To add a new dimension to itself the Institute established School of Management studies in 1996, which offers a two year / four semester post graduate degree programme in Management (MBA).
        The Institute now offers nine  B.Tech., nineteen M.Tech. Degree Programmes (including part-time), MCA, MBA, M.Sc. (Mathematics and Scientific Computing) and Master of Social work (M.S.W.) programmes and also registers candidates for the Ph.D. degree. The Institute has been recognized by the Government of India as one of the centres for the Quality Improvement Programme for M.Tech. and Ph.D.The Institute has a very progressive policy towards extending all possible facilities to its faculty members to acquire higher degrees and receive advanced training. As a result, majority of the faculty members possess Ph.D. degrees. The entire campus is networked with 94 Mbps lease line.
        In the year 1972, the Institute initiated a self employment project and established an industrial estate with 68 sheds with the objective of encouraging entrepreneurs and creating additional employment avenues.The Institute was selected as a lead institution in the Design theme under Indo-UK REC Project (1994-99). Under this scheme a Design Centre was established.The Institute has been selected as a Lead Institution under World Bank funded Government of India Project on Technical Education Quality Improvement Programme (TEQIP) (2002-2007). Two state level institutions are networked with MNNIT under the project.

 </p><br><br>
      
  </div>
</div>
</div>
   



</body>
</html>