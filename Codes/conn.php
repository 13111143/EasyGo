<?php 
	$conn = mysql_connect('localhost:8889');
	if(!$conn){
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('guide',$conn) or die ("数据库连接失败");
	mysql_query("set names utf8");
 ?>