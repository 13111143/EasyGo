<?php 
  session_start();
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登陆Easy-Go</title>
	<link rel="stylesheet" href="./css/reg.css">
	<link rel="stylesheet" href="./css/common.css">
</head>
<body>
	<div id="box">
		<div id="head">
			<span>欢迎登陆Easy-Go</span>		
		</div>
		<div id="regDiv">
			<form action="loginnow.php" id= "form" method="post">
				<label for="user_name" id="label_name">账户</label>
				<input type="text" class="textInput" id="user_name" name="user_name" placeholder="用户名" 
				<?php if(isset($_SESSION['temp_user'])) echo "value='{$_SESSION['temp_user']}'"; ?>><br>
				<label for="user_password" id="label_password">密码</label>
				<input type="password" class="textInput" id="user_password" name="user_password" placeholder="密码" >
				<input type="submit" value="现在登陆" id="submit">
			</form>
		</div>
	</div>
	<script src=".\js\jquery-2.0.3.min.js"></script>
	<script src=".\js\check.js"></script>
</body>
</html>