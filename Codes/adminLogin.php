<?php 
	session_start();
	include_once('conn.php');

	if(isset($_POST["user_name"]) && isset($_POST["user_password"]))
	{
		
		$sqlstr = "SELECT * FROM admin WHERE admin_id='{$_POST['user_name']}'";
		$result = mysql_query($sqlstr);
		$rstArray = mysql_fetch_assoc($result);

		if($rstArray == NULL || $rstArray["admin_pw"] != $_POST["user_password"])
		{
			$url = "adminFail.html";
			Header("Location:$url");
		}
		else{
			$url = "./GodMode/admin.html";
			Header("Location:$url");
		}
	}
 ?>