<?php 

	require_once('connect.php');

	$username = $_GET['username'];
	$sql = "select * from reg where username = '$username'";
	$query = mysql_query($sql);

	if($query && mysql_num_rows($query)){
		echo '{"code":0,"message":"已经有人注册过了"}';
	}else{
		echo '{"code":1,"message":"注册成功"}';
	}

 ?>