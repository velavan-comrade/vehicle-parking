<?php
include("db_connect.php");
if(isset($_POST['alogin']))
{
  $name=$_POST['aname'];
  $pass=$_POST['pwd'];
  $query="select * from alogin where aname='$name' and pwd='$pass'";
  $res=mysqli_query($con,$query);
  if($res)
    {
      if(mysqli_affected_rows($con)>0)
        {
          include("admin_dash.php");
            }else{ echo"failed";}
}
}
 if(isset($_POST['elogin']))
{
$name=$_POST['ename'];
$pass=$_POST['pwd'];
$query="select * from elogin where ename='$name' and pwd='$pass'";
$res=mysqli_query($con,$query);
if(mysqli_affected_rows($con)>0)
{
header("location:set_loc.php");
}else{ echo"failef";}
}
if(isset($_POST['ulogin']))
{
  session_start();
$name=$_POST['uname'];
$pass=$_POST['pwd'];
$query="select * from ulogin where uid='$name' and pwd='$pass'";
$res=mysqli_query($con,$query);
if(mysqli_affected_rows($con)>0)
{
  $_SESSION['uid']=$name;
include("booking_det.php");
}else{ echo"failef";}
}
?>
