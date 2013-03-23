//SETTING UP POPUP

//0 means disabled; 1 means enabled;
var popupStatus = 0;

//loading popup with jQuery
function loadPopup(){
	//loads popup only if it is disabled
	if(popupStatus==0){
		$("#popupBG").css({
			"opacity": "0.8"
		});
		$("#popupBG").fadeIn("slow");
		$("#popupPages").fadeIn("slow");
		popupStatus = 1;
	}
}

//disabling popup with jQuery
function disablePopup(){
	//disables popup only if it is enabled
	if(popupStatus==1){
		$("#popupBG").fadeOut("slow");
		$("#popupPages").fadeOut("slow");
		popupStatus = 0;
	}
}

//centering popup
function centerPopup(){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#popupPages").height();
	var popupWidth = $("#popupPages").width();
	//centering
	$("#popupPages").css({
		"position": "fixed",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#popupBG").css({
		"height": windowHeight
	});
	
}

