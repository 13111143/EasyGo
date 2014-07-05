<?php 
	session_start();
	if(isset($_SESSION['user_name'])){
		$name = $_SESSION['user_name'];
		include_once('conn.php');

		$sqlstr = "SELECT site_name,site_url FROM user_sites WHERE user_name = '$name' ";
		$result = mysql_query($sqlstr);
		$rstArray = mysql_fetch_assoc($result);
		// if($rstArray!=NULL)
		// $returnArray[]= $rstArray;
		$returnArray="";

		while($rstArray!=NULL){	
			$returnArray[]= $rstArray;
			$rstArray = mysql_fetch_assoc($result);
			// $returnArray[]= $rstArray;
		}

		echo json_encode($returnArray);
		
	}
	else
		echo json_encode("No");
 ?>