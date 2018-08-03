<?php include 'submit.php';
 
// create a variable
$login=$_POST['login'];
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$password=$_POST['password'];
$repeat=$_POST['repeat'];
$therapistname=$_POST['therapistname'];
$therapistcode=$_POST['therapistcode'];
 
//Execute the query
 
mysqli_query($connect, "INSERT INTO employees1(first_name,last_name,department,email) VALUES('$first_name','$last_name','$department','$email')");

?>