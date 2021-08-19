<html>
<head></head>
<style>
.box{
	border:1px solid black;
}
.radio1 .but{
	position:relative;
	display:inline-block;
	background-color:black;
}
img{
	height: 200px;
	width:350px;

}
</style>
<body>
<form method="POST" action="echo.php">
<?php
include("db_connect.php");
include("cus_mod.php");
SESSION_START();
$t=$_POST['st'];
$et=$_POST['et'];
$d=$_POST['date'];
$p=$_POST['place'];
$_SESSION['place']=$p;
$_SESSION['st']=$t;
$_SESSION['et']=$et;
$_SESSION['date']=$d;
$_SESSION['place']=$p;
  $res2=mysqli_query($con,"select slots from location where place='$p'");
  $row1=mysqli_fetch_array($res2,MYSQLI_ASSOC);
$bk=array();
$qry1="select slot,st,et from trans where place='$p' and date='$d'";
$res=mysqli_query($con,$qry1);
if($res)
{
	$i=0;
 while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
 {
	 if($row['st']>=$t)
	 {
	 if($row['st']<=$et||$row['st']==$t)
	 {
		 $bk[$i]=$row['slot'];
		 $i++;
		 
	 }
	 }
	 else if($row['et']>$t)
	 {
		 $bk[$i]=$row['slot'];
		 $i++;
	 }
}
echo $i;
$f=0;

  if($res2)
	{
			 for($k=1;$k<=$row1['slots'];$k++)
			 {
				foreach($bk as $j)
				{
				if($k==$j)
				 {	$f=1;}
				}
			 if($f==0){
			 book($k);
						 
			 }
			 $f=0;
			 }
			 
			 }
}
  else{
   if($res2)
	 {		echo "y";
		 $row1=mysqli_fetch_array($res2,MYSQLI_ASSOC);
			 for($k=1;$k<=$row1['slots'];$k++)
			 {
			 book($k); 
			 }
			 }
		 
  }
?>
<div align="center">

<input type="submit" name="book" class="but" value="BOOK"/></div>
</form>

<?php
function book($k)
{
echo '<span class="box"><label class="radio1"><img src="car3.jpg">';	 
					  echo $k;
					  echo '<label class="radio1"><input type="radio" name="slot" value='.$k.'></label></span>';
}
?>
</body>
</html>