
<?php

include ('dbconnction.php');

$fullname = $_REQUEST['fname'];
$username = $_REQUEST['uname'];
$email = $_REQUEST['email'];
$phonenumber = $_REQUEST['number'];
$password = $_REQUEST['password'];
$confirmpassword = $_REQUEST['password'];
$Gender = $_REQUEST['Gender'];

$sqlsss = "INSERT INTO `students` (`id`,`fullname`, `username`, `email`, `Phonenumber`,`password`,`confirm password`,`Gender`) VALUES (NULL, '$fullname', '$username', '$email', '$phonenumber','$password','$confirmpassword','$Gender')";
echo $sqlsss;
$result=$conn->query($sqlsss);
if(!$result){
    echo mysqli_connect_error();
}


 ?>