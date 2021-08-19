<?php
$cname=$_POST['company'];
include("db_connect.php");
include("emp_mod.php");
$res=mysqli_query($con,"select * from trans where company='$cname'");
$e=mysqli_error($con);
if(isset($_POST['submit'])){
echo $e.'<table>';

while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
  {
  	echo'<tr><td>'.$row['uid'].'</td><td>'.$row['name'].'</td><td>'.$row['date'].'</td><td>'.$row['st'].'</td><td>'.$row['et'].'</td><td><a href="cus_info.php?op=a">attend</a>';
  }
  echo "</table>";
}
 if($_GET['op']=='a')
 {
 	echo "attend";
 } 	
?>