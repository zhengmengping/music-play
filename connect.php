<?php 

	header("Content-Type:text/html;charset=utf-8");
	$con = mysql_connect('localhost','root','');
	mysql_select_db('ajaxMusic');
	mysql_query('set names utf8'); 
	// mysql_query('set names utf8');

 ?>