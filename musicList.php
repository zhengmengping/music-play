<?php 
	
	// header("Content-Type:text/html;charset=utf-8");
	// $con = mysql_connect('localhost','root','');
	// mysql_select_db('ajaxMusic');
	// //mysql_query('set names utf8'); 
	// mysql_query('set names utf8');
	require_once('connect.php');

	$sql = "select id,name,musicName from music_list";
	$query = mysql_query($sql);

	if($query && mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
		echo json_encode($data);
	}

 ?>