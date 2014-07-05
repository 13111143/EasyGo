
<?php
	function GetBaidu($word){
		//$word='啊';
		$count = 0;
		for($j=0;$j<=100;$j+=10){
			$str=file_get_contents("http://www.baidu.com/s?wd=$word&pn=$j");
			//搞定百度的广告,顺便去掉一些干扰性的html
			$str = preg_replace("/^<span class=\"c-showurl\">$/", '',$str);
			$str = preg_replace("/<b>/", '',$str);
			$str = preg_replace("/<\/b>/", '',$str);
			$arr = explode('<span class="g">',$str);
			
			if(count($arr)==1) break;	

			for($i=1;$i<count($arr);$i++){
				$arrx = explode('/',$arr[$i]);
				$result[$count] = $arrx[0];
				//$temp = $arrx[0];
				if($count == 31) break;
				$count++;
				 //echo "[$i]"."$temp".'<br/>';
			}
			// if($count==31) break;
		}
		return $result;
	}
	

		function Getsoso($word){
			$count = 0;
			for($j=1;$j<=10;$j++){
				$str=file_get_contents("http://www.soso.com/q?w=$word&pg=$j");
				 //echo htmlspecialchars($str);

				//搞定广告,顺便去掉一些干扰性的html
				$str = preg_replace("/<b>/", '',$str);
				$str = preg_replace('/"padding-top:2px"><cite>/', '',$str);
				$str = preg_replace("/<\/b>/",'',$str);
				$str = preg_replace("/https:\/\//",'',$str);
				$arr = explode('<cite>',$str);
				
				if(count($arr)==1) break;	

				for($i=1;$i<count($arr);$i++){
					$arrx = explode('/',$arr[$i]);
					$arrx = preg_replace("/</", '',$arrx);
					$result[$count] = $arrx[0];
					$temp = $arrx[0];
					if($count == 31) break;
					$count++;
					 //echo "[$i]"."$temp".'<br/>';
				}
				 if($count == 31) break;
			}
			return $result;
		}
	// function GetGoogle($word){
	// 	$count = 0;
	// 	for($j=0;$j<=100;$j+=10){
	// 		$str=file_get_contents("http://www.google.com.hk/search?q=$word&start=$j");
	// 		 //echo htmlspecialchars($str);

	// 		//搞定广告,顺便去掉一些干扰性的html
	// 		$str = preg_replace("/<b>/", '',$str);
	// 		$str = preg_replace('/"padding-top:2px"><cite>/', '',$str);
	// 		$str = preg_replace("/<\/b>/",'',$str);
	// 		$str = preg_replace("/https:\/\//",'',$str);
	// 		$arr = explode('<cite>',$str);
			
	// 		if(count($arr)==1) break;	

	// 		for($i=1;$i<count($arr);$i++){
	// 			$arrx = explode('/',$arr[$i]);
	// 			$result[$count] = $arrx[0];
	// 			$temp = $arrx[0];
	// 			if($count == 31) break;
	// 			$count++;
	// 			 //echo "[$i]"."$temp".'<br/>';
	// 		}
	// 		 if($count == 31) break;
	// 	}
	// 	return $result;
	// }
	//GetBaidu('视频');
	
 ?>