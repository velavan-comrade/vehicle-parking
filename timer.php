<!DOCTYPE html>
<html>
<head>
	<style type="text/css">


	</style>
</head>
<body>
	<?php
include("db_connect.php");
$res=mysqli_query($con,"select date,st,et from trans where tr_id='3001'");
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
if(isset($_POST['start']))
{
$v=$row['date'].$row['et'];
$et=strtotime($v);
}
else{
$v=$row['date'].$row['st'];
$et=strtotime($v);
}
echo '<p id="demo"></p>';
?>
<script>
var x=setInterval(function(){ 
	var t=<?php echo $et; ?>;   
 var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = t-((now/1000)+(4*3600+30*60));
    
  var days = Math.floor(distance / (60 * 60 * 24));
  var hours = Math.floor((distance % (60 * 60 * 24)) / (60 * 60));
  var minutes = Math.floor((distance % (60 * 60)) / (60));
  var seconds = Math.floor(distance % (60)) ;
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML =hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</body>
</html>