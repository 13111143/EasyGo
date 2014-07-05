function new_Fade(i){
	var nowblock = "#block"+i;
	if(i<=7){
		$(nowblock).animate({"opacity": "0.2"},100,function(){
			$(nowblock).animate({"opacity": "1"},500)
			i=i+1;
			new_Fade(i);
		});
	}
	else{
		$(nowblock).animate({"opacity": "1"},600,function(){
			for (var i = 1; i<=8; i++)
			 {
				var nowpara="#p"+i;
				$(nowpara).fadeToggle();
			}	
		});
	}
}

function toStore(){
	$("#circle").css("background-color","#80E680");
	$("#notice span").html("加入收藏");
}

$(document).ready(function(){

	var first = true;//是否第一次显示
	var SavaOrDelete = 0;//0=删除,1=收藏
	$.get('init.php',"",
		function(msg){
			if(msg!="No"){//如果已经登陆，去选他的收藏
				SavaOrDelete=0;//切换到删除模式
				var sites_num = msg.length;
				var count = 0;
					for (var i = 1; i<=8; i++)
					 {
						var nowlink= "#link"+i;
						var nowpara="#p"+i;
						if(count<sites_num)
						{
							$(nowlink).attr("href",msg[count]['site_url']);
							$(nowpara).html(msg[count]['site_name']);
							count++;
						}
					}
				first = false;
			}
		},
	"json"
	);

	//延时出现方块.
	new_Fade(1);

		


	//关于信息
	$("#aboutmessage").on("click",function(){
		$("#message").slideToggle(200);
	});

	//点击去百度搜索
	$("#Go").on("click",function(){
		$("#sub").trigger("click");
	});



	var temp="";
	var handle=null;
	//收藏或删除按钮显藏
	$(".blocks").on("mouseover",function(){
		temp=$(this).find(".bstyle").attr("id");
		handle = setTimeout(function(){
			if(SavaOrDelete==1)
			$("#"+temp).closest(".blocks").find(".store").css("background-color","#80E680").animate({"opacity":"1"},800);
		else
			$("#"+temp).closest(".blocks").find(".store").css("background-color","#FFFF99").animate({"opacity":"1"},800);
		}, 500);
	});

	$(".blocks").on("mouseleave",function(){
			$(this).find(".store").animate({"opacity":"0"},350);
			clearTimeout(handle);
	});


	//收藏或删除功能
	$(".store").on("click",function(){
		var link = $(this).closest(".blocks").find("p").html();
		if(SavaOrDelete==1){ //收藏功能
			var sendmsg="";
			var store = new Array();
			var addrName = $(this).closest(".blocks").find("p").html();
			var nowAddr = $(this).closest(".blocks").find("a").attr("href");
			//首先判断是否已经登陆,由于页面为纯html 只能采用ajax
			$.get('loginjudge.php',
				  sendmsg,
				  function(ans)
				  {
				  	//如果已经登陆
				  	if(ans == "yes")
				  	{
						store[0]=addrName;
						store[1]=nowAddr;
						// alert(sendmsg);
						$.get('store.php',
							  {getstore:store},
							  function(ans)
							  {
							  	alert(ans);
							  }
							);
				  	}
				  	//如果没有登陆
				  	else
				  		alert("请登录后再使用收藏功能,谢谢:)");
				  }
				);
		}
		else //删除功能
		{
			var sendmsg="";
			var store = new Array();
			var addrName = $(this).closest(".blocks").find("p").html();
			var nowAddr = $(this).closest(".blocks").find("a").attr("href");

			$.get('loginjudge.php',
				  sendmsg,
				  function(ans)
				  {
				  	//如果已经登陆

				  	if(link == "&nbsp;")
				  		alert("这里没有收藏！");
				  	else if(ans == "yes" )
				  	{
						store[0]=addrName;
						store[1]=nowAddr;
						// alert(sendmsg);
						$.get('deletestore.php',
							  {getstore:store},
							  function(ans)
							  {
							  	alert(ans);
							  	location.reload();
							  }
							);
				  	}
				  	//如果没有登陆
				  	else
				  		alert("请登录后再使用删除功能,谢谢:)");
				  }
				);
		}

	});
	



	//ajax获取信息
	$('#searchText').bind('input propertychange', function() {
		var nowtext = 'brand='+$("#searchText").val();
		$.get (
			'search.php',
			nowtext,
			 function(cc)
			 {
				// alert(cc[0]['site_name']);
				if(cc!="No")  //内容发生改变 并且找到了
				{
					 SavaOrDelete=1;
					 for (var i = 1; i<=7 ; i++)//首先消除7个
				 	 {
				 		var clear = "#p"+i;
				 		 $(clear).fadeToggle(500);
				 	}
				 	$("#p8").fadeToggle(500,function(){ //在第8个消完之后，才开始显示
				 		for (var i = 1; i<=8 ; i++)
			 			 {
			 				var nowlink= "#link"+i;
			 				var nowpara="#p"+i;
			 				if(i<=cc.length)
			 				{
			 					$(nowlink).attr("href",cc[i-1]['site_url']);
			 					$(nowpara).html(cc[i-1]['site_name']);	
			 				}
			 				else{
			 					$(nowlink).attr("href","#");
			 					$(nowpara).html("&nbsp");
			 				}
			 				$(nowpara).fadeToggle();
			 			}
			 			toStore();
				 	});
				 }
			 },
			 "json"
			);

	});
	// var newData = cc.replace(/\r\n/g,""); //去掉多余换行
	// newData = newData.substring(2);//去掉前两个未知字符



	//禁止回车提交表单 以迫使用户去点击方块而不是直接去百度搜索
	document.onkeydown = function(event) {
            var target, code, tag;
            if (!event) {
                event = window.event; //针对ie浏览器
                target = event.srcElement;
                code = event.keyCode;
                if (code == 13) {
                    tag = target.tagName;
                    if (tag == "TEXTAREA") { return true; }
                    else { return false; }
                }
            }
            else {
                target = event.target; //针对遵循w3c标准的浏览器，如Firefox
                code = event.keyCode;
                if (code == 13) {
                    tag = target.tagName;
                    if (tag == "INPUT") { return false; }
                    else { return true; } 
                }
            }
        };

});