function disappear(){
	$("#head").animate({
		"opacity": "0",
		"marginLeft":"0px"
	},300);
	$("#behave").animate({
		"opacity": "0",
		"marginLeft":"0px"
	},300);
}

$(document).ready(function(){

	$("#all").animate({
		"opacity": "1",
		"marginLeft":"25px"
	},300);
});