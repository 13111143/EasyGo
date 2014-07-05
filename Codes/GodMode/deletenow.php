
<!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 </head>
 <body>
 	<?php 
	include_once('../conn.php');
	if(isset($_POST["type"]))
	{
		$sqlstr = "SELECT * FROM all_sites WHERE site_class='{$_POST['type']}'";
		$result =mysql_query($sqlstr);
		if(mysql_fetch_assoc($result)==NULL)
			echo "<script>alert('删除失败,没有这个分组!');</script>" ;
		else{
			$sqlstr = "DELETE FROM all_sites WHERE site_class='{$_POST['type']}'";
			if(mysql_query($sqlstr)){
				echo "<script>alert('删除成功!');</script>" ;
			}
		}
		
		
			
	}
 	?>
 	
 </body>
 </html>