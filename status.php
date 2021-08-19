<!DOCTYPE html>
<html>
<head><style type="text/css">
			#demo{
			margin-top: -20%;
			width:auto;
			float:right;
			border:3px solid black;
			background-color: white;
			margin-right: 30%;
		}
		.dis:onclick{
			display:none;
		}
		#but{
	border:none;
	background-color:#446491;
	color:white;
	padding:10px 20px;
}
</style>
	<title></title>
</head>
<body>
<?php
include("db_connect.php");
include("cus_mod.php");
//include("timer.php");
session_start();
echo'<form method="POST">'; 
$id=$_SESSION['uid'];
//$eid=$_POST['eid'];
//$res1=mysqli_query($con,"select ename from elogin where eid='$eid'");
$res=mysqli_query($con,"select * from trans where uid='$id'");
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$et=$row['st'];
echo '<br><br><table align="center"><tr><td>Trans Id</td><td>'.$row['tr_id'].'</td></tr>
	<tr><td>Name</td><td>'.$row['name'].'</td></tr>
	<tr><td>Place</td><td>'.$row['place'].'</td></tr>
	<tr><td>Company</td><td>'.$row['company'].'</td></tr>
	<tr><td>Slot</td><td>'.$row['slot'].'</td></tr>
	<tr><td>Vechile</td><td>'.$row['vechile'].'</td></tr>
	<tr><td>Vechile Number</td><td>'.$row['vec_num'].'</td></tr></table>';
?>
<p id="demo"></p>

<script>
var x=setInterval(function(){ 
	var t=<?php echo $et; ?>;   
 var now = new Date().getTime();
  var distance = t-((now/1000)+(4*3600+30*60));
  var days = Math.floor(distance / (60 * 60 * 24));
  var hours = Math.floor((distance % (60 * 60 * 24)) / (60 * 60));
  var minutes = Math.floor((distance % (60 * 60)) / (60));
  var seconds = Math.floor(distance % (60)) ;
  document.getElementById("demo").innerHTML =hours + "h "
  + minutes + "m " + seconds + "s ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</body>
</html>