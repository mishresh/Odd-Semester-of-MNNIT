<?php 
  session_start(); 
  require('db.php');
   
 if (!isset($_SESSION['reg_no'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: sem.php');
  }

 
if(isset($_REQUEST["editteacher"]))
{
$id =  $_POST['id1'];
$tname=$_POST["teacher_name"];
$tsubject =$_POST['tsubject'];
$tsem = $_POST['tsem'];
$tdescription = $_POST['tdescription'];
$temail = $_POST['temail'];
$tmobile = $_POST['tmobile'];

  
mysqli_query($conn,"UPDATE teachers SET tname='$tname',tsubject='$tsubject',tsem='$tsem',description='$tdescription',temail=' $temail',tmobile='$tmobile' WHERE tid = '$id'");
//mysqli_query($conn,"update register set name='$name' where reg_no = 2001;");
echo "succesfully updated asijflskjfdjfjdfjfjidjfoiejuroiueio"; 
header('location: allteachers.php');
}
else
{
    $id = $_POST['passval'];

  $sql = "SELECT * FROM teachers WHERE tid = '$id'";
  $query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($query))
    {
      $tname=$row["tname"];
      $tsubject=$row["tsubject"];
      $tsem=$row["tsem"];
      $tdescription=$row["description"];
      $temail=$row["temail"];
      $tmobile=$row["tmobile"];
     
    }

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
.parallax {
    /* The image used */
    background-image: url(images/book21.jpg) ;

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
img {
  border-radius: 60%;
}

{
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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

.topnav .right {float: right;}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    .topnav li.right,
}
.button {
  display: inline-block;
  padding: 05px 10px;
  font-size: 20px;
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
.tbox {
border:2px solid green;
background:PowderBlue;
width:200px;
border-radius:25px;
-moz-border-radius:25px; 
-moz-box-shadow:    1px 1px 1px #ccc;
-webkit-box-shadow: 1px 1px 1px 1px #ccc;
 box-shadow:         1px 2px 2px 2px #ccc;
 height:50;
 padding-left: 10px;
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
  <h2>Edit Faculty Details </h2>
  </div></div>


<div style="color:black ;border-radius: 20px; padding: 70px 0px 70px 70px;background-color:white;opacity: 0.8; ">
   
    <div style="padding-center:0px; padding-left:100px; color: MidnightBlue; font-size: 20px; text-shadow: -1px 0 black, 0 1px OrangeRed, 1px 0 gold, 0 -1px red;">

 <form method="post" action="editteacher.php">
  <table style="width:120%;">
  <tr>
  <td ><h3><b>Teacher Name</b></h3></td>
  <td ><h3><b>Description</b></h3></td>
  <tr>
       <td>  <input class="tbox" type="text" name="teacher_name" value="<?php echo $tname; ?>" required>
        <td >  <input class="tbox" type="text" name="tdescription"  value="<?php echo $tdescription; ?>" required></td>

   
    </td>
  </tr>
  <tr>
  <td ><h3><b>Subject</b></h3></td>
  <td ><h3><b>Email</b></h3></td>
  </tr>
  <tr>
    <td >  <input class="tbox" type="text" name="tsubject" value="<?php echo $tsubject; ?>"  required></td>
    <td >  <input class="tbox" type="email" name="temail"  value="<?php echo $temail; ?>"  required></td>

  </tr>
  <tr>
  <td ><h3><b>Semester</b></h3></td>
  <td ><h3><b>Mobile</b></h3></td>
   </tr>
 
  <tr>
    <td > <select class="tbox" name="tsem" value="1" width="200px"  value="<?php echo $tsem; ?>" required >
                     
                     <option value="1">first</option>
                     <option value="3">third</option>
                     <option value="5">fifth</option>

                     </select></td>
    <td >  <input class="tbox" type="text" name="tmobile"  value="<?php echo $tmobile; ?>" required></td>
   </tr>

</table><br><br><div style="padding-right:180px">
<center>
  <tr>     <td ><input style="display:none" type="text" name="id1"  value="<?php echo $id; ?>"> <center><input class="button button2" type="submit" value="submit" name="editteacher"><center></td></button></td>


</form>

</div>

     
   <div  style="padding-left:180px">
   <br><br></div></div>
   <footer class="footer">
      <div class="text-center text-muted">
        <p><center>&copy; Creative Mishresh. All rights reserved.</center></p>
      </div>
    </footer>
   </div>
</body>
</html> 
