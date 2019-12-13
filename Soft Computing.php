<?php   
  require('db.php');
  $sql = "SELECT * FROM syllabus WHERE sem=3";
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
  <a href="#">semester 3 subjects</a>
  <?php
                        
                        while ($row = mysqli_fetch_array($query))
                        {
                           if (!is_null($row['p1']))
                            {       
                            echo '<li>
                            <a href="OS.php">'.$row['p1'].'</a></li>';
                            }
                            if (!is_null($row['p2']))
                            {       
                            echo '<li>
                            <a href="DBMS.php">'.$row['p2'].'</a></li>';
                            }
                            if (!is_null($row['p3']))
                            {       
                            echo '<li>
                            <a href="Soft Computing.php">'.$row['p3'].'</a></li>';
                            }
                            if (!is_null($row['p4']))
                            {       
                            echo '<li>
                            <a href="Analysis Of Algorithm.php">'.$row['p4'].'</a></li>';
                            }
                            if (!is_null($row['p5']))
                            {       
                            echo '<li>
                            <a href="OBM.php">'.$row['p5'].'</a></li>';
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
  <h2>SOFT COMPUTING </h2>
  </div></div>
<br><br>
<div class="row">
  <div class="side">
                <div style="color:black ;border-radius: 20px; padding: 0px 0px 0px 0px;background-color:grey;opacity: 0.8; ">
<br>
      <p div style="padding: 10px 20px 10px 20px;"><b>This course has a associated lab with it. This course introduces soft computing methods.
The principal constituents of soft computing are fuzzy logic, neural network theory, and
probabilistic reasoning. The course studies the methods and explores how they are
employed in associated techniques such as Case-Based Reasoning and expert systems for
pattern recognition, clustering, diagnosis, and control both individually and in hybrid
arrangement. The basics of each technique will be discussed and industrial applications
will illustrate the strengths of each approach.</b>
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
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Introduction, Learning Processes, Neural Network (NN) </li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Single and Multi-Layer Perceptron, Fuzzy Logic and Fuzzy Set Theory (9)</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fuzzy Systems, Neuro-Fuzzy Modeling (8) </li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Applications of Soft Computing (4) </li>
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
    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neuro-Fuzzy and Soft Computing by J.-S.R. Jang, C.-T. Sun, E. Mizutani</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Applying Case-Based Reasoning by I. Watson</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fuzzy Logic with Engineering Applications by T J ross</li>
        </b>
 </p><br><br>
      
  </div>
</div>
</div>



</body>
</html>