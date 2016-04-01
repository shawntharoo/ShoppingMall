<?php
/* db ekath ekka connect karanawa */
$con=mysqli_connect("localhost","cybermart","calm","php");


/* db eke error ekak awoth display karanawa */
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

/* html page eke textbox wala thiyana values variabales walata allaganawa */
$name = mysqli_real_escape_string($con, $_POST['name']);
$birthday = mysqli_real_escape_string($con, $_POST['birthday']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$tel = mysqli_real_escape_string($con, $_POST['tel']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

/* database eke register table ekata insert karanawa variables walata allagatha values */
$sql="INSERT INTO 
register (name, birthday, address,tel,email,username,password,confirm_password)
VALUES ('$name', '$birthday', '$address','$tel','$email','$username','$password','$cpassword')";


/* sql query eka database ekata yanna run karanawa */
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

/* wena page ekakata redirect karanawa */
header('Location: thank.html');


mysqli_close($con);





?>