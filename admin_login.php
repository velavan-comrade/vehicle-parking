<!DOCTYPE html>
<html>
<head>
<h1 align="center"><u>ADMIN LOGIN</u><h1>
<style type="text/css">
    h1{
    color:black;
    }
    body{

    background-color:#87ceeb;
    }
    .c1{
		margin-top:10%;
		margin-left:40%;
    	background-color: black;
		height:250px;
		width:300px;
		}
    		::placeholder{
    			color:black;
			}				}
    		#let{
				padding:3px;
				color:white;
    			background-color:black;
    			border:none;
				float:middle;
    			border-bottom:2px solid red;
    		}
    		#ico{
    	
    		}
    		
    		#but{
			
				padding:10px 20px;
    			color:black;
    			border:0;
    			background-color:green;
    			}
    </style>
</head>
<body>
<form action="login_db.php" method="POST">
	<div class="c1" align="center">
	<img src="admin.ico" id="ico"/><br><br>
		 <input type="text" name="aname" id="let" placeholder="Admin name">
		<br>  <input type="password" name="pwd" id="let" placeholder="password"><br>
       <input type="submit" value="login" name="alogin"  id="but">
    </div>
</form>
</body>
</html/>

    
