<!DOCTYPE html>
<html>
<meta name="viewport" content="width=devoce-width,initial-scal=1.0">
<head>
<h1 align="center"><u>USER LOGIN</u><h1>
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
    ::placeholder
    {
        color: white;
    }
    		#let{
                margin-left: 25%;
				padding:3px;
				color:white;
    			background-color:black;
    			border:none;
    			border-bottom:2px solid red;
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
<img src="cus-log.png" height="80px" id="ico">
	<div class="c1">
		 <input type="number" name="uname" id="let" placeholder="user name">
		<br>  <input type="password" name="pwd" id="let" placeholder="password"> <br>
       <input type="submit" value="login" name="ulogin"  id="but">
    </div>
</form>
</body
</html>

    
