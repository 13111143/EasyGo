
$(document).ready(function(){
	hasContent=0;
	var main = document.getElementById('framer');
	// parent.location.href="http://www.baidu.com";
	$("#framel").load(function(){
		var aim = $(this).contents();
		aim.find("a").on('click',function(event){
			//添加选中效果
			// event.preventDefault();
			aim.find("a").css("color","#999966");
			aim.find("div").removeClass("selected")
			$(this).css("color","#303942");
			$(this).closest("div").addClass("selected");

			//消失
			// frame = $("#framer");
			// if(hasContent==1){
			// 	frame.get(0).contentWindow.disappear();
   //          } 
			// frame.attr("src",$(this).attr("href"));
			
			// // parent.main.location.href="http://www.baidu.com";
			// hasContent=1;

		});
	})
	

});
