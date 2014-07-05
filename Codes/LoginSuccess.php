<?php
	session_start();
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录成功</title>
	<link rel="stylesheet" href="./css/regSuccess.css">
	<link rel="stylesheet" href="./css/common.css">
</head>
<body>
	<div id="box">
		<div id="head">
			<span>欢迎回来: <?php echo "{$_SESSION['user_name']}" ?></span>
		</div>
		
		<div id="backBox">
			<!-- <div id="welcome"><span>早上好，<?php echo $_SESSION['user_name'];?></span></div>			 -->
			<a href="first.php"><div id="backWord"><span>返回首页</span></div></a>
		</div>
	</div>
</body>
</html>