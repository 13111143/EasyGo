<?php 
	session_start();
	include_once('conn.php');
	// if(!isset($_SESSION['Guide']))
	// {
		$sqlstr = "SELECT * FROM all_sites";
		$result = mysql_query($sqlstr);
		$rst = mysql_fetch_assoc($result);

		while($rst!=NULL)
		{
			$Guide[]=$rst;
			$rst = mysql_fetch_assoc($result);
		}
		$_SESSION['Guide']=$Guide;
	// }
	
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Easy - Go</title>
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- 头部 -->
	<div id="head">
		<div id="innerHead">
			<div class="headDiv" id="title">Easy - Go</div>
			<div class="headDiv" id="slogan">we are the ones that make the change</div>
			<div class="headDiv" id="login">
				<?php
					if(isset($_SESSION["user_name"]))
					{
						echo "欢迎您 {$_SESSION['user_name']}";
					}
					else{
						echo "<a href='login.php'>登录</a>";
					}
				?>
			</div>
			<div class="headDiv" id="reg">
				<?php
					if(!isset($_SESSION["user_name"])){
						echo "<a href='reg.html'>注册</a>";
					}
					else{
						echo "<a href='logout.php'>注销</a>";
					}

				?>
			</div>

			<div class="headDiv" id="mystore">
				<?php
					if(isset($_SESSION["user_name"])){
						echo "<a href='first.php'>我的收藏</a>";
					}
				?>
			</div>

			<div class="headDiv" id="aboutmessage">
				<i>Designer</i>
				<div id = "message">
					<ul>
						<li>黄华健</li>
						<li>王潭</li>
						<li>...</li>
						<li><a href="GodMode.html">AdminMode</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- 搜索框 -->
	<div id="inputForm">
		<form action="http://www.baidu.com/baidu" target="_blank" class="form-inline">
			<input type="text" name=word id="searchText" class="form-control" value="" />
			<input type="submit" value="Go!" id="searchButton" class="button glow button-rounded button-flat" />
		</form>
	</div>
	
	<!-- 收藏或删除 -->
	<div id="notice"><div id="circle"></div><span>删除收藏</span></div>
	
	<!-- 格子 -->
	<div id="boxes">
		<div>
			<ul>
				<li><div  class="blocks">
					<a href="#" id="link1">
						<div id="block1" class="bstyle">
							<p id="p1">&nbsp</p>
						</div>
					</a>
					<div class="store"></div>
				</div>
				</li>
				<li><div  class="blocks"><a href="#" id="link2"><div id="block2" class="bstyle"><p id="p2";>&nbsp</p></div></a><div class="store"></div></div></li>
				<li><div  class="blocks"><a href="#" id="link3"><div id="block3" class="bstyle"><p id="p3";>&nbsp</p></div></a><div class="store"></div></div></li>
				<li><div  class="blocks"><a href="#" id="link4"><div id="block4" class="bstyle"><p id="p4";>&nbsp</p></div></a><div class="store"></div></div></li>
			</ul>
		</div>
		<div>
			<ul>
				<li><div  class="blocks"><a href="#" id="link5"><div id="block5" class="bstyle"><p id="p5";>&nbsp</p></div></a><div class="store"></div></div></li>
				<li><div  class="blocks"><a href="#" id="link6"><div id="block6" class="bstyle"><p id="p6";>&nbsp</p></div></a><div class="store"></div></div></li>
				<li><div  class="blocks"><a href="#" id="link7"><div id="block7" class="bstyle"><p id="p7";>&nbsp</p></div></a><div class="store"></div></div></li>
				<li><div  class="blocks"><a href="#" id="link8"><div id="block8" class="bstyle"><p id="p8";>&nbsp</p></div></a><div class="store"></div></div></li>
			</ul>
		</div>
	</div>

	<script src=".\js\bootstrap.min.js"></script>

	<script src=".\js\buttons.js"></script>

	<script src=".\js\jquery-2.0.3.min.js"></script>

	<script src=".\js\jQueryapp.js"></script>

	<script charset="gbk" src="http://www.baidu.com/js/opensug.js"></script>
</body>

</html>


