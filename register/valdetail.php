<?php
   include("config.php");
session_start();
  $email=$_POST['email'];
$a=0;
  $password=$_POST['password'];
      $sql = "SELECT * FROM udetail WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION['login_user'] = $email;
         
         echo "success";
      }else {
         echo "Your Login Name or Password is invalid";
      }
   
/*echo "$login_session";

if($login_session)
{
		$s="select type from users where id='$username'";
$result1=mysqli_query($conn,$s);
echo mysql_error();
$row1=mysql_fetch_array($result1);
		if($row1["type"]=="buser")
{

header("location: dinfo.php");
}
else if($row["type"]=="badmin")
{
    header("location: dinfo.php");
}
} */ 
?>