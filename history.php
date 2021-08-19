<!DOCTYPE html>
<html>
<head>
	<title>history</title>
	<?php
	include("cus_mod.php");
	include("db_connect.php");
	?>
</head>
<style type="text/css">
	table{
		border-collapse: separate;
		border-style: solid black;
		border:2px solid black;
		width: auto;
		border-spacing:2px;
	}
</style>
<body>
	<br>
	<?php
	session_start();
	$id=$_SESSION['uid'];
	$res=mysqli_query($con,"select * from trans where uid='$id'");

	echo '<table align="center" border="1" cellpadding="10"><th>Trans Id</th><th>Date</th><th>Start time</th><th>End time</th><th>Place</th><th>Company Name</th><th>Attender Id</th></tr>';
 while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
 {
	echo '<tr id="t2"><td>'.$row['tr_id'].'</td><td>';
	echo $row['date'].'</td><td>';
	echo $row['st'].'</td><td>';
	echo $row['et'].'</td><td>';
	echo $row['place'].'</td><td>';
	echo $row['company'].'</td><td>';
	echo '2001</td>';
	echo '</tr>';
  }
  echo '</table>';
 ?>

</body>
</html>