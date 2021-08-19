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
	$qry="select * from location";
  $res=mysqli_query($con,$qry);
	echo '<table align="center"><th>Owner</th><th>Cname</th><th>place</th><th>Mobile</th><th>slots</th><th>Address</th></tr>';
 while($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
 {
	echo '<tr id="t2"><td>'.$row['owner'].'</td><td>';
	echo $row['cname'].'</td><td>';
	echo $row['mobile'].'</td><td>';
	echo $row['place'].'</td><td>';
	echo $row['slots'].'</td><td>';
	echo $row['address'].'</td>';
	echo '</tr>';
 }
 	echo '</table>';
 ?>
 </body>
 </html>