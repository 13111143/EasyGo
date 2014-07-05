<?php 
	session_start();
	include_once('conn.php');
	if(isset($_POST["user_name"]) && isset($_POST["user_password"])){
		$sqlstr = "SELECT user_name FROM user WHERE user_name = '{$_POST['user_name']}'";
		$result = mysql_query($sqlstr);
		$rstArray = mysql_fetch_assoc($result);

		if($rstArray == NULL){
			$sqlstr = "INSERT INTO user VALUES('{$_POST['user_name']}','{$_POST['user_password']}')";
			
			if(mysql_query($sqlstr)){
				$_SESSION["user_name"]=$_POST["user_name"];
				$url = "regSuccess.html";
				Header("Location: $url");
			}
			else{

			}
		}
		else{
			$url = "regFail.html";
			Header("Location: $url");
		}

	}
 ?>