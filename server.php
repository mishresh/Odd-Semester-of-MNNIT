<?php
$errors2=array();
// connect to the database
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'db_syllabus'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}



//  ADD SUBJECTS


if (isset($_POST['add_subject'])) {
  // receive all input values from the form
  $scode = mysqli_real_escape_string($conn, $_POST['scode']);
  $sname = mysqli_real_escape_string($conn, $_POST['sname']);
   $ssem = mysqli_real_escape_string($conn, $_POST['ssem']); 
  $scredit = mysqli_real_escape_string($conn, $_POST['scredit']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  // Finally, register user if there are no errors in the form
    $query = "INSERT INTO subjects (scode, sname, ssem, scredit) VALUES ('$scode','$sname','$ssem','$scredit')";
    mysqli_query($db, $query);
    $_SESSION['success'] = "Book data inserted";
    header('location: addsubject.php');
}



?>