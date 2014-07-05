<?php 
	session_start();
	include_once('conn.php');

	if(isset($_POST["user_name"]) && isset($_POST["user_password"]))
	{
		$_SESSION["temp_user"]=$_POST["user_name"];//保存临时用户名以便返回
		$sqlstr = "SELECT * FROM user WHERE user_name='{$_POST['user_name']}'";
		$result = mysql_query($sqlstr);
		$rstArray = mysql_fetch_assoc($result);

		if($rstArray == NULL || $rstArray["user_pw"] != $_POST["user_password"])
		{
			$url = "LoginFail.html";
			Header("Location:$url");
		}
		else{
			$_SESSION['user_name']=$_POST["user_name"];
			$url = "LoginSuccess.php";
			Header("Location:$url");
		}
	}
 ?>