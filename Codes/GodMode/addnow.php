
<!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 </head>
 <body>
 	<?php 
		include_once('../conn.php');
		$class = $_POST['type'];
		for($i=1;$i<=8;$i++){
			$url=$_POST["url$i"];
			$name=$_POST["site$i"];
			$sqlstr = "INSERT INTO all_sites VALUES('$class','$name','$url')";
			mysql_query($sqlstr);
			
		}
		echo "<script>alert('添加成功!');</script>";

			//$sqlstr = "INSERT INTO all_sites VALUES('{$_POST['type']}','{$_POST['site']}','{$_POST['url']}')";
			//mysql_query($sqlstr);
			//echo "<script>alert('添加成功!');</script>";


 	?>
 </body>
 </html>