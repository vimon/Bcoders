<?php
include("config.php");
$uname=$_POST["uname"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];

$query="insert into udetail values('$uname','$email','$password','$phone','$dob','$gender',CURDATE())";
$result = mysqli_query($conn,$query);
if (!$result) {
    die('Invalid query: ');
}
else
{
    header("location: login/index.html");
}
/*$query1="insert into login values('$email','$password')";
$result1 = mysqli_query($conn,$query1);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}*/
echo "<br>";
mysql_close($conn);
?>
