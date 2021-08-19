<html>
<?php
include("cus_mod.php");
?>
<style type="text/css">
#but{
	border:none;
	background-color:red;
	color:white;
	padding:10px 20px;
}
textarea{
	padding: 10px 20px;
}
</style>
<body>
	<br>
	<br>
	<form action="" method="POST">
		<table align="center" cellspacing="20">
			<tr>
				<td>NAME</td>
				<td><input type="text" name="name">
				</td>
			</tr>
			<tr><td>Transaction Id</td><td><input type="number" name="tid"></td></tr>
			<tr><td>Date</td><td><input type="date" name="date"></td></tr>
			<tr><td>Complaint</td><td><textarea name="complaint"></textarea></td></tr>
			<tr><td><br><input type="submit" name="com" value="submit" id="but"></td><td><br><input type="reset" value="cancel" id="but"></td></tr>
		</table>
		
	</form>
</body>
</html>
