<!DOCTYPE html>
<html>
<?php
extract($_POST);
include("db_connect.php");
if(isset($_POST['submit']))
{
	$res=mysqli_query($con,"select * from trans where place='$place'");
	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
	echo '<table>';
}
?>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
<div>
	<select name="place">
		<option value="central">central</option>
	</select>
<input type="button" name="submit" id="5">
</div>
</form>
</body>
</html>