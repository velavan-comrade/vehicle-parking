<?php
include("db_connect.php");
SESSION_START();
$id=$_SESSION['uid'];
$p=$_SESSION['place'];
$t=$_SESSION['st'];
$et=$_SESSION['et'];
$d=$_SESSION['date'];
$p=$_SESSION['place'];
$s=$_POST['slot'];
echo $id;
$qry="INSERT INTO trans (uid,place,date,st,et,slot) values ('$id','$p','$d','$t','$et','$s')";
$res=mysqli_query($con,$qry);
if(mysqli_affected_rows($con)>0)
{
	echo"booking confirmed";
}
?>