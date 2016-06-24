<?php require 'c:\xampp\htdocs\CH\connections\connection.php';?>
<?php session_start();
$deleteid=$_GET['id'];
echo "inside delete";
	echo $deleteid;
	$sql=$con->query("DELETE FROM Posts WHERE ID =$deleteid");
	if($sql)
	echo "deleted successfully";
	else
	echo "Failed delete";
	header("Location: bulletin.php");

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