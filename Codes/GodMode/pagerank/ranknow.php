<?php 
	include_once('PageRank.php');
	include_once('../../conn.php');
	$word = $_GET['word'];
	$word = str_replace(' ','',$word);
	 $sqlstr = "SELECT * FROM all_sites WHERE site_class='".$word."'";
	 	$result = mysql_query($sqlstr);
	 	if(mysql_fetch_assoc($result) != null)
	 	{
	 		echo json_encode('has');
	 		return;
	 	}
	 	else{
	 		$rst = PageRank($word);
			for($i = 0;$i<=8;$i++){
				$url[]=$rst[$i]->url;
			}
			echo json_encode($url);
	 	}
	
	//PageRank('视频');

 ?>