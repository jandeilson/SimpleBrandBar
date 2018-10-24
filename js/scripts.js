$(function(){

// iframe height ---------------------
$(window).resize(function(){
	$("#iframe").height( $(window).height() - 50 );
}).resize();
	
});

// put your own script ------------------------------------------
	
// select ---------------------
$(".select_box").hover(function(){
	$(this).addClass("active");
	$(this).children("ul").css("display","block");
}, function(){
	$(this).removeClass("active");
	$(this).children("ul").css("display","none");
});
	
	
// theme change ---------------------
$(".select_box ul li a").click(function(e){
	e.preventDefault();

	var name = $(this).children('span').text();
	$('title').text(name + ' | Joguindie');
		
	var full_name = $(this).attr('data-title');
	$('.title').text(full_name);
		
	var url_buy = $(this).attr('href');
	$('.btn_discover').attr('href',url_discover);
		
	var url_demo = $(this).attr('data-demo');
	$('.btn_close').attr('href',url_demo);
	$("#iframe").attr('src',url_demo);
	});
		
$(".select_box ul li:last-child").addClass('last');	

// ------------------------------------------ your own script