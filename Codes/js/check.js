$(document).ready(function(){
	$("#form").submit(function(){
		if ($("#user_name").val() == "") {
    	alert("用户名不能为空");
    	return false;
    	}
    	if($("#user_password").val() == "") {
    	alert("密码不能为空");
    	return false;
    	}
	});
});