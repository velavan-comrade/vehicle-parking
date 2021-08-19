
<form name="insert" action="" method="post">
<table width="100%" height="117"  border="0">
<tr>
<th width="27%" height="63" scope="row">Sate :</th>
<td width="73%"><select onchange="run(this.value)"  name="state" id="state" class="form-control" >
<option value="">Select</option>
<?php include("db_connect.php");
$query =mysqli_query($con,"select distinct place from location");
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
	$row1=$row['place'];
echo '<option value='.$row1.'>'.$row1.'</option>';
}
?>
</select></td>
</tr>
<tr>
<th scope="row">District :</th>
<td><select name="district" id="qwe" class="form-control">
<option value="">Select</option>
</select></td>
</tr>
<tr><td>error<p id="rep"></p></td></tr>
</table>
</form>
