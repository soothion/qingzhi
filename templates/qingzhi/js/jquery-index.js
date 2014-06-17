$(function(){
		$("#twitter li:not(:first)").css("display","none");
		var B=$("#twitter li:last");
		var C=$("#twitter li:first");
		setInterval(function(){
			if(B.is(":visible")){
				C.fadeIn(500).addClass("in");B.hide()
			}else{
				$("#twitter li:visible").addClass("in");
				$("#twitter li.in").next().fadeIn(500);
				$("li.in").hide().removeClass("in")}
			},3000) //每3秒钟切换一条
			
	$(".ms_more").click(function(){
			$(this).parent().parent().find(".phide").removeClass("phide").addClass("pshow");
			$(this).parent().parent().find(".ms_more_box").slideDown();
	});

	$(".msclose").click(function(){
		$(this).parent().parent().find(".pshow").slideUp();
		$(this).parent().parent().find(".pshow").addClass("phide").removeClass("pshow");
		$(this).parent().slideUp();
		$(this).parent().parent().find(".phide").slideDown();
	});
	 //返回顶部
	$("#back-to-top").hide();
	$(window).scroll(function(){
		if ($(window).scrollTop()>600){
			$("#back-to-top").fadeIn(1000);
		}
		else
		{
			$("#back-to-top").fadeOut(1000);
		}
		});$("#back-to-top").click(function(){
		$('body,html').animate({scrollTop:0},1000);
		return false;
		});
})




