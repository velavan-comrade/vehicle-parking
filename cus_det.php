<html>
<head><?php
include("db_connect.php");
include("admin_mod.php")?>
</head>
<style>
table{
	border:1px solid black; 
}
th{
	height:30px;
	width:auto;
	border-spacing:20px;
	background-color:#00cc00;}
#t2{
	background-color:#90EE90;
	border-spacing:20px;
}

</style>
<body>
<br><br>
<?php
	$qry="select * from ulogin";
  $res=mysqli_query($con,$qry);
	echo '<table align="center"><th>Name</th><th>Customer Id</th><th>Gender</th><th>Aadhar</th><th>Mobile</th><th>Age</th><th>Address</th></tr>';
 while($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
 {
	echo '<tr id="t2"><td>'.$row['uname'].'</td><td>';
	echo $row['uid'].'</td><td>';
	echo $row['gender'].'</td><td>';
	echo $row['aadhar'].'</td><td>';
	echo $row['mobile'].'</td><td>';
	echo $row['age'].'</td><td>';
	echo $row['address'].'</td>';
	echo '</tr>';
 }
 	echo '</table>';
 ?>
 </body>
 </html>