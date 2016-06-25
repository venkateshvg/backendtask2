<?php require 'c:\xampp\htdocs\CH\connections\connection.php';

$PW="admin";
$Fname="admin";
$Lname="admin";
$Email="admin@gmail.com";
$User="admin1";
$ulevel=3;
$Storepassword= password_hash($PW,PASSWORD_BCRYPT,array('cost'=> 10));

$sql=$con->query("INSERT INTO 
	backend(Firstname,Lastname,Email,Password,username,Userlevel)VALUES('{$Fname}','{$Lname}','{$Email}','{$Storepassword}','{$User}','{$ulevel}')");
	




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