<html>
<head><?php
include("cus_mod.php");
error_reporting(0);
?>
</head>
<style>
#but{
	border:none;
	background-color:red;
	color:white;
	padding:10px 20px;
}
</style>
<script>

	function run(x) {

        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","state.php?q="+x,true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("company").innerHTML =this.responseText;
            }
        };

    }
</script>
<body>
<form action="avail.php" method="POST">
<br>

<table align="center">
	<tr><td>CUS_ID</td><td><?php echo $_SESSION['uid'];?></td></tr>
<tr>
  <td>Name</td><td><input type="text" name="name" required></td>
</tr>
<tr>
  <td align="center"><input type="radio" name="vec" value="car" checked >Car  <input type="radio" name="vec" value="bike">Bike</td>
</tr>
<tr>
	<td>Vehicle number</td><td><input type="text" name="num_plate"></td>
</tr>
<tr>
	<td>Start time</td><td><input type="time" name="st"></td>
</tr>
<tr>
	<td>End time</td><td><input type="time" name="et" required></td>
</tr>
<tr>
	<td>Location</td><td><select id="se" name="place" onchange="run(this.value)">
		<option id="">--select--</option>
		<?php
	include("db_connect.php");
	$res=mysqli_query($con,"select distinct place from location");
	
	while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
		$row1=$row['place'];
		echo $row1;
		echo '<option value='.$row1.'>'.$row1.'</option>';
	}
	?></select></td>
</tr>
<tr>
	<td>Company</td><td>	
		<select id="company" name="company">
		           		<option id="">--select--</option>

		                    </select></td>
<tr>
	<td>Date</td><td><input type="date" name="date"></td></tr>
	<td><br><input type="submit" name="submit" value="book" id="but"></td> <td><br><input type="reset" value="cancel" id="but"></td>
<tr>
	<td><br><p id="demo"> </p></td>
</tr>
</table>
 </form>

</body>
</html>