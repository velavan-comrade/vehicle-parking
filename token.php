<html>
<?php
include("db_connect.php");
include("emp_mod.php");
?>
<body>
<form action="avail.php" method="POST">
<br>
<table align="center">
	<tr><td>CUS_ID</td><td><input type="text" name="cid"></td></tr>
<tr>
  <td>Name</td><td><input type="text" name="name" required></td>
</tr>
<tr>
  <td align="center"><input type="radio" name="vec" value="car" checked >Car<input type="radio" name="vec" value="bike">Bike</td>
</tr>
<tr>
	<td>Vehicle number</td><td><input type="text" name="num_plate"></td>
</tr>
<tr>
	<td>Date</td><td><input type="date" name="date"></td>
</tr>
<tr>
	<td>Start time</td><td><input type="time" name="st"></td>
</tr>
<tr>
	<td>End time</td><td><input type="time" name="et" required></td>
</tr>
<tr>
	<td><br><input type="submit" name="submit" value="book" id="but"></td> <td><br><input type="reset" value="cancel" id="but"></td>
</tr>
</table>
 </form>
</body>
</html>