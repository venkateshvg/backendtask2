<?php require 'c:\xampp\htdocs\CH\connections\connection.php';?>
<?php session_start(); 
if(!isset($_SESSION["UserID"])){

	echo "Check your credentials. You need to login";
	header('Location: login.php');
	
}
       $output=$con->query("select UserID,username,Userlevel from backend");
	   echo "<h1>Admin Panel</h1>";
	   //Display results as tabulation
	   echo "<table border='1' cellpadding='10'>";
	   echo "<tr> <th>UserID</th> <th>Username</th> <th>Userlevel</th> </tr>";

	   while ($rows=$output->fetch_array(MYSQLI_BOTH) )
	          {    		
			       $un=$rows['UserID'];
				   $usrlevel=$rows['Userlevel'];
				   if($usrlevel==1)
				   $userlevelname="Viewer";
				   else if($usrlevel==2)
				   $userlevelname="Editor";
				   else
				   $userlevelname="Admin";
				   
				   
				
					
				   echo "<tr>";
		           echo '<td>' . $rows['UserID'] . '</td>';
				   echo '<td>' . $rows['username'] . '</td>';
		           echo '<td>' . $userlevelname . '</td>';
				   if($usrlevel!=3)
				   {
				   
				     echo '<td><a href="change.php?id=' . $rows['UserID'] .  ' && usr='.$userlevelname.' && usrname='.$rows['username'].' ">Change</a></td>';
			       }
				 		   
		      }
			  echo "</table>";
			  					  
  
 

 ?>
 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<br /><br />
<a href ="./logout.php" style="text-decoration: none;">Logout</a>
</body>
</html>  