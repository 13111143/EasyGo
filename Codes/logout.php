<?php 
	session_start();
	session_destroy();
	unset($_SESSION["user_name"]);
 ?>
<?php 
	session_start();
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="./css/regSuccess.css">
	<link rel="stylesheet" href="./css/common.css">
	<title>注销成功</title>
</head>
<body>
	<div id="box">
		<div id="head">
			<span>注销成功</span>
		</div>
		
		<div id="backBox">
			<!-- <div id="welcome"><span>早上好，<?php echo $_SESSION['user_name'];?></span></div>			 -->
			<a href="first.php"><div id="backWord"><span>返回首页</span></div></a>
		</div>
	</div>
</body>
</html>