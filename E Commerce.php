<?php   
  require('db.php');
  $sql = "SELECT * FROM syllabus WHERE sem=5";
$query = mysqli_query($conn, $sql);
if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
?> 

<html>
<head>
<title>MNNIT MCA PORTAL</title>
<link type="text/css" href="subjects.css" rel="stylesheet"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    margin-top: 185px;
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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  
  .sidenav a {font-size: 18px;}
}
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
  margin-top: 100px;
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

<br>
    


    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">semester 5 subjects</a>
  <?php
                        
                        while ($row = mysqli_fetch_array($query))
                        {
                            if (!is_null($row['p1']))
                            {       
                            echo '<li>
                            <a href="E Commerce.php">'.$row['p1'].'</a></li>';
                            }
                            if (!is_null($row['p2']))
                            {       
                            echo '<li>
                            <a href="Professional Ethics.php">'.$row['p2'].'</a></li>';
                            }
                            if (!is_null($row['p3']))
                            {       
                            echo '<li>
                            <a href="Data Warehouse and Mining.php">'.$row['p3'].'</a></li>';
                            }
                            if (!is_null($row['p4']))
                            {       
                            echo '<li>
                            <a href="Software Project Management.php">'.$row['p4'].'</a></li>';
                            }
                            if (!is_null($row['p5']))
                            {       
                            echo '<li>
                            <a href="">'.$row['p5'].'</a></li>';
                            }
                            if (!is_null($row['p6']))
                            {       
                            echo '<li>
                            <a href="#">'.$row['p6'].'</a></li>';
                            }
                            if (!is_null($row['p7']))
                            {       
                            echo '<li>
                            <a href="#">'.$row['p7'].'</a></li>';
                            }
                            if (!is_null($row['p8']))
                            {       
                            echo '<li>
                            <a href="#">'.$row['p8'].'</a></li>';
                            }
                        

                        // echo '<li>
                        //     <a href="#">'.$row['p1'].'</a></li>';
                        }

                        ?>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     

     <div class="parallax">
<div class="navbar">
   <a style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; All Subjects</a>

  <a href="sem.php" style="text-decoration: none;"> Home </font></a>
  <a href="tdetail.php">Teachers</a>
  <a href="aboutme.php" style="text-decoration: none;">About </font></a>
  
  <a href="adminlogin.php" class="right">Admin Login </a>
</div>

<br><br>


<div  style="padding-left:50px; padding-right:50px">
<div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:white;opacity: 0.8;">
<div style="padding-center:0px; padding-left:50px; color: MidnightBlue; font-size: 20px; text-shadow: -1px 0 black, 0 1px OrangeRed, 1px 0 gold, 0 -1px red;">
  <h2>E Commerce </h2>
  </div></div>
<br><br>
<div class="row">
  <div class="side">
                <div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:grey;opacity: 0.8; ">
<br>
      <p div style="padding: 10px 20px 10px 20px;"><b>The growth of the Internet continues to have a tremendous influence on business.
Companies and organizations of all types and sizes are rethinking their strategies and
how they run their operations. This new course in the Temple E-Marketing program
challenges students to explore the realities and implications of e-commerce from a
marketer's perspective. Business-to-consumer (B2C) and business-to-business (B2B) ecommerce markets are examined. The course introduces students to a wide range of
electronic commerce issues for marketers, as a foundation for continual learning in the
dynamic e-commerce environment. This course has a associated lab with it.</b>
 </p><br><br>
      
  </div>
</div>
</div>


<br><br>
<div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:white;opacity: 0.8;">
<div style="padding-center:0px; padding-left:50px; color: MidnightBlue; font-size: 20px; text-shadow: -1px 0 black, 0 1px OrangeRed, 1px 0 gold, 0 -1px red;">
  <h2>Course Outline (To be covered in 40 lectures) </h2>
  </div></div>
<br><br>
<div class="row">
  <div class="side">
                <div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:grey;opacity: 0.8; ">
<br>
      <p div style="padding: 10px 20px 10px 20px;"><b>
        <ol >
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Introduction to e-Commerce and Network Infrastructure for e-commerce. (6)</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-commerce Models, e-Advertising & Marketing (8)</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electronic Payment Systems and Electronic Data Exchange (8) </li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-commerce Security (6)</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e-CRM (7)</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile Commerce (5)</li>
        </ol>    
</b>
 </p><br><br>
      
  </div>
</div>
</div>



<br><br>
<div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:white;opacity: 0.8;">
<div style="padding-center:0px; padding-left:50px; color: MidnightBlue; font-size: 20px; text-shadow: -1px 0 black, 0 1px OrangeRed, 1px 0 gold, 0 -1px red;">
  <h2>Text Books </h2>
  </div></div>
<br><br>
<div class="row">
  <div class="side">
                <div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:grey;opacity: 0.8; ">
<br>
      <p div style="padding: 10px 20px 10px 20px;"><b>
    <ol>
    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Introduction to E-commerce by Jeffrey F.Rayport & Bernard J.Jaworski</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Frontiers of E-commerce by Kalakota & Winston</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Commerce- Strategy technologies and Applications by David Whiteley </li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Commerce-Concepts, Models & Strategies by C.S.V. Murthy </li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Commerce by Perry</li>
    </ol>   
</b>
 </p><br><br>
      
  </div>
</div>
</div>

	

</body>
</html>