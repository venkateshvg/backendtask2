<?php 
$nameErr=$emailErr=$userErr=$pwdErr=$cpwdErr="";
require 'c:\xampp\htdocs\CH\connections\connection.php';?>
<?php 
if(isset($_POST['Register']))
{
	session_start();
	$User=$_POST['Username'];
	$Fname=$_POST['Firstname'];
	$Lname=$_POST['Lastname'];
	$Email=$_POST['Email'];
	$PW=$_POST['password'];
	$CPW=$_POST['confirmpassword'];
	
	if (empty($_POST['Firstname'])) {
    $nameErr = "FirstName is required";
  } 
  if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
  } 
else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format"; 
    
  }if (empty($_POST["Username"])) {
    $userErr = "Username is required";
  } 
	if (empty($_POST["password"])) {
    $pwdErr = "Password is required";
  } 
  if($PW!=$CPW)
  {
	  $cpwdErr=" Passwords do not match";
  }
  
  $Storepassword= password_hash($PW,PASSWORD_BCRYPT,array('cost'=> 10));
  
  
if ( !$nameErr && !$emailErr && !$userErr && !$pwdErr && !$cpwdErr )
{

    
	$sql=$con->query("INSERT INTO 
	backend(Firstname,Lastname,Email,Password,username)VALUES('{$Fname}','{$Lname}','{$Email}','{$Storepassword}','{$User}')");
	if(!$sql)
	echo "Not registered";
	else
	echo "Registered Successfully";
	
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style>
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
	  <h1> Registration Page</h1>
	</div>
	<div id="ContentLeft">
	  <h2>&nbsp;</h2>
	</div>
    <div id="ContentRight">
      <form id="form1" name="form1" method="post" action="">
        <p>
          <label for="Firstname"></label>
        Firstname: 
        <input type="text" name="Firstname" id="Firstname" />
        <span class="error">* <?php echo $nameErr;?></span>
        </p>
        <p>Lastname: 
          <label for="Lastname"></label>
          <input type="text" name="Lastname" id="Lastname" />
        </p>
        <p> Email:    
          <label for="Email"></label>
           	<input type="text" name="Email" id="Email" />
             <span class="error">* <?php echo $emailErr;?></span>
        </p>
        <p>Username:
          <label for="Username"></label>
          <input type="text" name="Username" id="Username" />
           <span class="error">* <?php echo $userErr;?></span>
        </p>
        <p>Password: 
          <label for="password"></label>
          <input type="password" name="password" id="password" />
           <span class="error">* <?php echo $pwdErr;?></span>
        </p>
       
       
        <p>Confirm Password: 
          <label for="confirmpassword"></label>
          <input type="password" name="confirmpassword" id="confirmpassword" />
          <span class="error">* <?php echo $cpwdErr;?></span>
        </p>
        <p>
          	  <input type="submit" name="Register" id="Register" value="Register" />	
              <br /><br />
       	  <a href=" ./login.php" style="text-decoration: none;">Login</a>
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </form>
    </div>
</div>

<div id="Footer"></div>
</div>


</body>
</html>