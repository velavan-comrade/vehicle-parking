<?php
include("db_connect.php")
if(isset($_POST['place']))
{

$i=$_POST['place'];
	$res=mysqli_query($con,"select company from location where place='$i'");
	while($books= mysqli_fetch_array($res,MYSQLI_ASSOC)){

		echo '<option>'.$books['company'].'</option>';
	}
}
else
{
	echo "no";
}?>