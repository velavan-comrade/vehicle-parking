<html>
<head> HOME PAGE</head>
<style>
tr:hover{
	color:white;
	background-color:blue;
}
td{
	border-radius:1em;
	text-align:center;
}
table{
	border-radius:30%;
	border-collapse:separate;
	width:60%;
}
table a{
	text-decoration:none;
}
</style>

<body>
<?php
echo $name;
$_session['aname']=$name;
?>
<table align="center" cellpadding="30">
<tr><td> <a href="emp_det.php">Employees</a> </td></tr><br>
<tr><td> <a href="cus_det.php">Users</a> </td></tr><br>
<tr> <td><a href="loc_det.php">Locations</a> </td></tr> <br>
<tr> <td><a href="emp_det.php">Requests</a> </td></tr>
</table>

</body>
</html>