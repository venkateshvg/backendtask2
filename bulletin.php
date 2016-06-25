<?php require 'c:\xampp\htdocs\CH\connections\connection.php';?>
<?php session_start();
if(isset($_POST['Add']))
{      
	 $post=$_POST['Post'];
	 
	 $poster=$_SESSION["Username"];
	 if($post)
	 $don=$con->query("INSERT INTO Posts(Post,PostedBy) VALUES('{$post}','{$poster}')");
	  
	  
	
}


if(isset($_SESSION["UserID"])){
}else{
	echo "Check your credentials";
	header('Location: login.php');
	
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
	  <h1> Bulletin Page</h1>
	</div>
	<div id="ContentLeft">
	  <h2>&nbsp;</h2>
	</div>
    <div id="ContentRight">
      <p>
        <?php
	   //Retrieve all rows from Post table
	   $ul=0;
	   $result=$con->query("select * from posts");
	   $rowcount=mysqli_num_rows($result);
	   
	   //Display results as tabulation
	   if($rowcount==0)
	   echo "No Posts available";
	   else{
	   echo "<table border='1' cellpadding='10'>";
	   echo "<tr> <th>Post </th> <th>Posted By</th> <th>Action</th> </tr>";

	   while ($row=$result->fetch_array(MYSQLI_BOTH) ) 
	          {    
			       
			       $ul=$_SESSION["Userlevel"];
	 			   $_SESSION["ID"]=$row['ID'];
				   echo "<tr>";
		           
				   echo '<td>' . $row['Post'] . '</td>';
		           echo '<td>' . $row['PostedBy'] . '</td>';
		           if($ul==3)
				   {
				  
				   
				   echo '<td><a href="delete.php?id=' . $row['ID'] . '"onClick="return confirm(\'Are you sure you want to delete?\');">Delete</a></td>';
				   
				   }
				   
		           echo "</tr>";
				 		   
		      }
			  echo "</table>";
	 echo "<br>";
	   }
	            
	 

       ?>
       </p>
       
       <form id="form1" name="form1" method="post" action="">
         <p>
           <label for="Post"></label>
           <?php if($ul!=1){?>
         Post:
         <input type="text" name="Post" id="Post" />
         <label for="Postedby"></label>
         
<input type="submit" name="Add" id="Add" value="Add" />
       <?php } ?>
         </p>
         <a href ="./logout.php" style="text-decoration: none;">Logout</a>
         <br /><br />
       </form>
       
       <?php
        if($ul==3)	   
	    echo  '<a href="adminpanel.php" style="text-decoration: none;">AdminPanel</a>';?>
      
       <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
</div>
<div id="Footer"></div>
</div>
</body>
</html>