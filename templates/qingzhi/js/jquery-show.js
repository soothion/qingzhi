$(function(){
		var tabTitle = "#tab a";
		var tabContent = ".tabcon";
		$(tabTitle + ":first").addClass("on");
		$(tabContent).not(":first").hide();
		$(tabTitle).unbind("click").bind("click", function(){
		$(this).siblings("span a").removeClass("on").end().addClass("on");
		var index = $(tabTitle).index( $(this) );
		$(tabContent).eq(index).siblings(tabContent).slideUp().end().fadeIn(500);
		});
});