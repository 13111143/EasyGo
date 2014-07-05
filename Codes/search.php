<?php 
			session_start();
			
			$Guide=$_SESSION['Guide'];

			// echo print_r($Guide);
			
			 $text = $_GET['brand'];
			// $text = "搜索";
			 $flag = true;
			// // echo json_encode($Guide["搜索"]);
			
			foreach($Guide as $key => $value)
			{
				if($text == $value['site_class']){
					$flag=false;
					$temp['site_name']=$value['site_name'];
					$temp['site_url']=$value['site_url'];
					$sites[]=$temp;
					// echo print_r($sites);
				}
			}
			// echo json_encode("aaa");

			if($flag==true)
			echo json_encode("No");
			else
			{
			echo json_encode($sites);
			}
?>

		


