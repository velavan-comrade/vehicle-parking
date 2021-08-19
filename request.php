<html>
<head><?php
include("db_connect.php");
include("admin_mod.php");
error_reporting(0);
?>
</head>
<style>
table{
	padding:20px 400px;
	border:1px solid black;
}
</style>
<body>
<br>
<?php
  $qry="select * from temp";
  $res=mysqli_query($con,$qry);
  $aff=mysqli_affected_rows($con);
  if ($aff==0) {
  	echo "no request";
}
else{
	while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
	{
	echo'<div align="center">';
	echo'<table><tr><td>';
	  
	echo "Name:</td><td>".$row['name'].'<br></td></tr>';
	echo "<tr><td>Gender:</td><td>".$row['gender'].'<br></td></tr>';
	echo "<tr><td>Aaddhar:</td><td>".$row['aadhar'].'<br></td></tr>';
	echo "<tr><td>Mobile:</td><td>".$row['mobile'].'<br></td></tr>';
	echo "<tr><td>Age:</td><td>".$row['age'].'<br></td></tr>';
	echo "<tr><td>Address:</td><td>".$row['address'].'<br></td></tr>';
	echo  '<tr><td><a href="request.php?id='.$row['tid'].'&op=add">add</a></td><td>';
	echo  '<a href="request.php?id='.$row['tid'].'&op=del">delete</a>';
	echo '</td></tr>';
	echo '</table></div>';
  }
}
 
if($_GET['op']=='add'){ 
		$e=$_GET['id'];
		$qry2=mysqli_query($con,"select * from temp where tid='$e'");
		$af=mysqli_affected_rows($con);
		if($af>0)
	{
		$qry3=mysqli_query($con,"select max(eid) from elogin");
		$id=mysqli_fetch_array($qry3,MYSQLI_NUM);
		$ts=mysqli_fetch_array($qry2,MYSQLI_ASSOC);
		$i=$id['0']+1;
      $res1=mysqli_query($con,"insert into elogin(`ename`,`eid`,`pwd`,`gender`,`aadhar`,`mobile`,`age`,`address`)values('$ts[name]','$i','$ts[pwd]','$ts[gender]','$ts[aadhar]','$ts[mobile]','$ts[age]','$ts[address]')");
	$t=mysqli_error($con);
		echo $t;
		$num=mysqli_affected_rows($con);
		if($num==1)
		{
		$res1=mysqli_query($con,"delete from temp where tid='$e'"); 
		unset($_GET['op']);
		 header("Refresh:0");}
		else{		echo"ni";
			}    }
			else{
				echo "no requests"; 
			}
		}
 if($_GET['op']=='del'){
 	$e=$_GET['id'];
		$res1=mysqli_query($con,"delete from temp where tid='$e'");
		$num=mysqli_affected_rows($con);
		if($num==1)
		{	
		unset($_GET['op']);

			header("Refresh:0");
			echo"delete";
		}
		else{
			echo"ni";
		}
    }  
   
  ?>
  
</body>
</html>