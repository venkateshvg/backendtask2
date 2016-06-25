<?php require 'c:\xampp\htdocs\CH\connections\connection.php';?>

<?php 
echo '<h1>Admin Panel User Level Change</h1>';
$uname=$_GET['usrname'];
$un=$_GET['id'];
echo "Userlevel : ";
$user=$_GET['usr'];
echo $user;
echo "<br>";
echo "<br>";
echo "UserID : ";
echo $un;
echo "<br>";
echo "<br>";
echo "Username : ";
echo $uname;
echo "<br>";
echo "<br>";
//drop down box

 echo '<form id=form3 action="" method="post">';
echo '<td class = "select"> 
        <select name="ulevel">        
                <option value="1">Viewer</option>
                <option value="2">Editor</option>
                <option value="3">Admin</option>
        </select>
        <input type="submit" name="change" value="change" />
		</td>';  
		echo '</form>';
		
		
		           echo "</tr>";
				   if(isset($_POST['change']))
				   {
					   //writing update query
					   $cng=$_POST['ulevel']; 
					   $display=$con->query("UPDATE backend SET Userlevel=$cng WHERE UserID=$un ");
					   header('Location:adminpanel.php');
					   
				   }



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>