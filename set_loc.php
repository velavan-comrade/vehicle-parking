<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">function run(x) {

        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","state.php?q="+x,true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("company").innerHTML =this.responseText;
            }
        };

}</script>
	<title></title>
</head>
<body>
	<form action="cus_info.php" method="POST">
	<table>
<tr>
<td>Location</td><td><select id="se" name="place" onchange="run(this.value)" required>
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
		<select id="company" name="company" required>
		           		<option id="">--select--</option>

		                    </select></td>
</tr>
<tr>
	<td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>