<title>upload</title>
<link rel="shortcut icon" href="Home.png" />
<?php // login.php
include("db.php"); 
$cat=$_POST['cat'];
  $sub=$_POST['sub'];
  $topic=$_POST['topic'];
  $link=$_POST['link'];
  $des=$_POST['des'];
  $ename=$_POST['ename'];
  $uploaded=$_POST['up'];
$edate=date("Y-m-d");
$sharing=$_POST['pr'];

$target="upload/";
$target=$target.basename($_FILES['up']['name']);
//copy($_FILES['uploaded']['tmp_name'], $target);
if(move_uploaded_file($_FILES['up']['tmp_name'], $target))
{
echo "The file  has been uploaded";
}  
else
{ 
echo "Sorry, there was a problem uploading your file."; 
}
 
 session_start();
 $user=$_SESSION['login_user'];

$query="INSERT INTO isd (seno,cat,sub,topic,link,des,file,sharing,edate,username)
VALUES ('','$cat','$sub','$topic','$link','$des','$target','$sharing','$edate','$user')";
$r=mysql_query($query);
if($r)
{
  header("Location:logic/index.php");
}


	
?>