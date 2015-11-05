// alert("loaded");










function contest_detail_open_tab ( clss , id ) {



	 

	$(".eligibility").css({"display":"none"});
	$(".judgin_process").css({"display":"none"});
	$(".judging_criteria").css({"display":"none"});
	$(".categories").css({"display":"none"});

	$("#eligibility").css({"color":"#284372"});
	$("#judgin_process").css({"color":"#284372"});
	$("#judging_criteria").css({"color":"#284372"});
	$("#categories").css({"color":"#284372"}); 
	
	$(clss).css("display","block");
	$(id).css("color","#b01e23");


	 

}