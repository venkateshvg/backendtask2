<?php require 'c:\xampp\htdocs\CH\connections\connection.php';?>
<?php
$UN=$PWD="";
if(isset($_POST['Login'])) {
$UN=$_POST['username'];
$PWD=$_POST['password'];

$result=$con->query("select * from backend where username='$UN'");
$row=$result->fetch_array(MYSQLI_BOTH);
if(password_verify($PWD,$row['Password'])){
	
session_start();
$_SESSION["Username"]=$row['username'];
$_SESSION["UserID"]=$row['UserID'];
$_SESSION["Userlevel"]=$row['Userlevel'];
header( 'Location: bulletin.php');
}

else{
	session_start();
	$_SESSION['LogInFail']="yes";
}
}

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
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
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


</ul>
</nav>


</div>
<div id="Content">
	<div id="pageheading">
	  <h1>Login Page</h1>
	</div>
	<div id="ContentLeft">
	  <h2>&nbsp;</h2>
	</div>
    <div id="ContentRight">   
      <form id="form" name="form" method="post" action="">
        <?php if(isset($_SESSION["LogInFail"])){ ?>
        <div class="FormElement"> LogIn Failed! Please Check Your Credentials</div>
        <br /><br />
        <?php } ?>
        Username:  
        <label for="Username"></label>
        <span id="sprytextfield1">
        <input type="text" name="username" id="username" />
        <span class="textfieldRequiredMsg">A value is required.</span></span>
        <p>Password:  <span id="sprypassword1">
          <label for="password"></label>
          <input type="password" name="password" id="password" />
          <span class="passwordRequiredMsg">A value is required.</span></span></p>
        <p>
          <input type="submit" name="Login" id="Login" value="Login" />
        </p>
      </form>
    </div>
</div>
<div id="Footer"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>