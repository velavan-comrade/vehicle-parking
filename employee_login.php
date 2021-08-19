<!DOCTYPE html>
<html>
<meta name="viewport" content="width=devoce-width,initial-scal=1.0">
<head>
<h1 align="center"><u>EMPLOYEE LOGIN</u><h1>
<style type="text/css">
    h1{
    color:black;
    }
    body{

    background-color:#87ceeb;
    }
    .c1{
    	border-radius:10%;
    	background-color: black;
    	margin-left: 40%;
    	margin-right: 20%;
    	margin-top: 2%;
    	height:150px; 
    	width:300px;
		}
  	.c2{
    		height: 100px;
    		padding: 2px;
    		margin-left: 25%;
    		margin-top: 50%;
    		border-radius:20%;}
    		::placeholder{
    			color:white;
    		}
    		#let{
				padding:3px;
				color:white;
    			background-color:black;
    			border:none;
    			border-bottom:2px solid red;
    		}
    		#ico{
    			
    			border-radius:20%;
    			margin-left:40%;
    			margin-top:10%;
				margin-bottom:-20%;
    		}
    		
    		#but{
				margin-top:10%;
				padding:10px 20px;
    		    margin-left:30%;
    			color:black;
    			border:0;
    			background-color:green;
    			}
    </style>
</head>
<body>
<form action="login_db.php" method="POST">

	<div class="c1">
		<div class="c2">
		 <input type="text" name="ename" id="let" placeholder="employee name">
		<br>  <input type="password" name="pwd" id="let" placeholder="password"> <br>
       <input type="submit" value="login" name="elogin"  id="but">
    </div>
 </div>
</form>
</body>
</html>

    
