var current_product_id = "";

$(document).ready(function(){
	$('#product_page button').hover(function(){
		$(this).find('img').attr('src','/images/product_page_button_hover.png');
	},function(){
		$(this).find('img').attr('src','/images/product_page_button.png');
	});
	
	$('#how_to_list li,#how_to_list2 li,#how_to_button a').hover(function(){
		$(this).find('img').attr('src',$(this).find('img').attr('src').replace(".png","_hover.png"));
	},function(){
		$(this).find('img').attr('src',$(this).find('img').attr('src').replace("_hover.png",".png"));
	});
	
	$('#product_list_btn').click(function(){
		$('.product_wrapper').hide();
		$('#product_list_wrapper').show();
	});
	
	$('.product').click(function(){
		$('#product_list_wrapper').hide();
		var id = $(this).attr('href').replace("#","");
		current_product_id = id;
		$('#'+id).show();
	});
	
	$('.product_img').click(function(){
		$('#'+current_product_id+' .first_product_image').attr('src',$(this).attr('src'));
	});
});