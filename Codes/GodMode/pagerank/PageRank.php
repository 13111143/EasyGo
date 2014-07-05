<?php 
	include_once('GetUrl.php');
	include_once('Site.class.php');

	function PageRank($word){
		$baidu = GetBaidu($word);
		$google = Getsoso($word);
		//初始化部分 flag表示第某个网址有没有被提到过
		$num = 32;
		$flagB = array();
		$flagG = array();
		$result = array();
		for($i=0;$i<=$num-1;$i++){$flagB[$i]=true;$flagG[$i]=true;}

		//度娘部分
		for($i=0;$i<=$num-1;$i++){//using i
			if($flagB[$i]!=false){
				$flagB[$i]=false;
				$url = $baidu[$i];
				$newsite = new SiteB($url);
				if(stripos($newsite->url,'baidu')||stripos($newsite->url,'zhidao')||stripos($newsite->url,'soso')){
					$newsite->rank=$newsite->rank-5;
				}
				//找和与它相同的,置其flag=flase,找到一个rank+1
				//度娘里找
				for($j=$i;$j<=$num-1;$j++){//using j
					if($flagB[$j]==false) continue;
					if($baidu[$j]==$url){
						$flagB[$j]=false;
						$newsite->rank=$newsite->rank+1;
					}
				}
				//谷歌里找
				//echo $flagG[1];
				for($j=0;$j<=$num-1;$j++){//using j
					if($flagG[$j]==false) continue;
					//echo "$url<br>".$google[$j];
					if($google[$j]==$url){
						$flagG[$j]=false;
						$newsite->rank=$newsite->rank+1;
					}
				}
				$result[]=$newsite;
			}//endif
		}//endfor

		//谷歌部分
		for($i=0;$i<=$num-1;$i++){//using i
			if($flagG[$i]!=false){
				$flagG[$i]=false;
				$url = $google[$i];
				$newsite = new SiteG($url);
				if(stripos($newsite->url,'baidu')||stripos($newsite->url,'soso')){
					$newsite->rank=$newsite->rank-5;
				}
				//找和与它相同的,置其flag=flase,找到一个rank+1
				
				//谷歌里找
				for($j=$i;$j<=$num-1;$j++){//using j
					if($flagG[$j]==false) continue;
					if($google[$j]==$url){
						$flagG[$j]=false;
						$newsite->rank=$newsite->rank+1;
					}
				}
				$result[]=$newsite;
			}//endif
		}//endfor

		//起泡排序
		for($i=0;$i<count($result)-1;$i++){
			for($j=$i+1;$j<count($result);$j++){
				if($result[$i]->rank < $result[$j]->rank){
					$temp = $result[$i];
					$result[$i] = $result[$j];
					$result[$j] = $temp;
				}
			}
		}

		for($i=0;$i<=8;$i++){
			$newrst[]=$result[$i];
		}
		return $newrst;
	}

 ?>