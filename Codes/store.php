<?php 
	session_start();
	$msg = $_GET['getstore'];
	$name = $_SESSION['user_name']; 
	$site = $msg[0];
	$url = $msg[1];
	// echo json_encode($url);
	include_once('conn.php');
	$sqlstr = "SELECT site_name FROM user_sites WHERE user_name = '$name' AND site_name = '$site'";
	$result = mysql_query($sqlstr);
	$rstArray = mysql_fetch_assoc($result);

	if($rstArray == NULL)
	{
		$sqlstr = "INSERT INTO user_sites VALUES('$name','$site','$url')";
		if(mysql_query($sqlstr)){
			echo "收藏".$site."成功!";
		}
		else
			echo "收藏失败!";
	}
	else
	{
		echo "您已经收藏该网址";
	}
 ?>