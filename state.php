<?php
if($_REQUEST["q"])
{
	$q=$_REQUEST["q"];
	require("db_connect.php");
	$qry=mysqli_query($con,"select cname from location where place='$q'");
	while($row=mysqli_fetch_array($qry,MYSQLI_ASSOC))
{
	echo '<option>'.$row['cname'].'</option>';
}
}
else
{
	echo "no found";
}
?>