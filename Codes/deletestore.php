<?php 
	session_start();
	$msg = $_GET['getstore'];
	$name = $_SESSION['user_name']; 
	$site = $msg[0];
	$url = $msg[1];
	// echo json_encode($url);
	include_once('conn.php');
	$sqlstr = "DELETE FROM user_sites WHERE user_name = '$name' AND site_name = '$site'";
	if(mysql_query($sqlstr))
		echo "删除收藏：".$site." 成功";
	else
		echo "已经删除过了!";

 ?>