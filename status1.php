<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include("cus_mod.php");
include("timer.php");
session_start();
$eid=$_POST['eid'];
$id=$_SESSION['uid'];
$res1=mysqli_query($con,"select ename from elogin where eid='$eid'");
$res=mysqli_query($con,"select * from trans where uid='$id'");
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
echo '<br><table align="center"><tr><td>Trans Id</td><td>'.$row['tr_id'].'</td></tr>
	<tr><td>Name</td><td>'.$row['name'].'</td></tr>
	<tr><td>Place</td><td>'.$row['place'].'</td></tr>
	<tr><td>Company</td><td>'.$row['company'].'</td></tr>
	<tr><td>Slot</td><td>'.$row['slot'].'</td></tr>
	<tr><td>Vechile</td><td>'.$row['vechile'].'</td></tr>
	<tr><td>Vechile Number</td><td>'.$row['vec_num'].'</td></tr>
	<tr><td>Attender Name</td><td>'.$row['ename'].'</td></tr>
	<tr><td>Attender Id</td><td>'.$eid.'</td></tr>
	</table>';	?>

</body>
</html>