<html>
<head><?php
include("db_connect.php");
?>
</head>
<style type="text/css">
  .button{
    margin-left: 30px;
  }
  table{
    text-align:justify;
    padding: 40px 50px;
    border:1px solid black;
  }
</style>
<body>
<br>
<?php
session_start();
echo '<form method="POST" action="">';
  $qry="select * from complaint";
  $res=mysqli_query($con,$qry);
  if($res){
  while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
  echo'<table align="center"><tr><td>';
  
  echo 'Name</td><td>:'.$row['name'].'</td></tr>';
  echo '<tr><td>ID</td><td>:'.$row['id'].'</td></tr>';
  echo '<tr><td>T Id</td><td>:'.$row['tid'].'<br></td></tr>';
  echo '<tr><td>Date</td><td>:'.$row['date'].'<br></td></tr>';
  echo '<tr><td>Complaint</td><td>:'.$row['complaint'].'<br></td></tr>';
  echo'<tr><td><br>&nbsp
        <input type="submit" name="button2"
                class="button" style="color:light green" value="Delete" />';
  echo '</td></tr>';
  echo '</table></form>';
  $_session['tid']=$row['tid'];
} 
}else{
  echo "no requests";
}  
if (isset($_POST['button2'])) {
           		include("db_connect.php");
                $qry1="delete from complaint where tid='$_session[tid]'";
    $res1=mysqli_query($con,$qry1);
	  $num=mysqli_affected_rows($con);
	  
        } 
  ?>
  
</body>
</html>