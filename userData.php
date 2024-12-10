<?php

$sever = "localhost";
$username = "root";
$password = "";
$dbname = "asana_userdata";

$con = mysqli_connect($sever, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}

else
{
    echo "connected";
}

// start

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO `userdata`(`Name`, `Email`, `Subject`, `Message`) VALUES (
'$name','$email','$subject','$message')";

$result = mysqli_query($con , $sql);

if($result)
{
    echo "data submitted";
}

else
{
    echo "submission failed...!";
}

?>