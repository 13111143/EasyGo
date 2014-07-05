<?php 
	 class Site{
		public $url;
		public $sitename;
		public $rank;

		public function __construct($url,$rank){
		}

	}
	class SiteB extends Site{
		public function __construct($url){
			$this->url=$url;
			$this->rank=1;
		}
	}
	class SiteG extends Site{
		public function __construct($url){
			$this->url=$url;
			$this->rank=1;
		}
	}  
 ?>