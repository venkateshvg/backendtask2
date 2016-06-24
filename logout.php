<?php require 'c:\xampp\htdocs\CH\connections\connection.php';?>
<?php 
session_start();
unset($_SESSION["UserID"]);
session_destroy();


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style >
body{
	margin:0;
	padding:0;
}
#Holder{
	width:980px;
	heigh:auto;
	margin-left:auto;
	margin-right:auto;
	margin-top:21px;
	margin-bottom:21px;
}
#Header{
	height:70px;
	margin-bottom:11px;
}
#NavBar{
	height:60px;
	
}
#Content{
	height:auto;
	clear:both;
	overflow:auto;
	
}
#ContentLeft
{
	width:280px;
	float:left;
	padding-left:11px;
	
}
#ContentRight
{
	width:680px;
	float:right;
}
#pageheading
{
	height:auto;
	padding:11px;
}

#Footer{
	height:100px;
}
	nav ul {
		margin:0;
		padding:0;
	}
	nav ul li{
		list-style-type:none;
		float:left;
		display:block;
		width:150px;
		height:60px;
		text-align:center;
		line-height:55px;
		font-size:17px;
	}
	nav ul li a
	{
		text-decoration:none;
		
	}
	h1{
		margin:0;
	}
	h2{
		margin:0;
	}
	
 
</style>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head> 

<body>

<div id="Holder">
<div id="Header"></div>
<div id="NavBar">
<nav>
<ul>
<li></li>
<li></li>
 

</ul>
</nav>


</div>
<div id="Content">
	<div id="pageheading">
	  <h1> You have logged out</h1>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
      <a href="./login.php"style="text-decoration: none;">Click to Login</a>    
	</div>
	<div id="ContentLeft">
	  <h2>&nbsp;</h2>
	</div>
    <div id="ContentRight"> 
    
    </div>
</div>
<div id="Footer"></div>
</div>
</body>
</html>