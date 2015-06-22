<?php 
$pages = load_page();
$result = get_category_list();
?>

<h3 id='product_list_btn'><img src='/images/product_titile.png'/></h3>
	
<div id='product_list_wrapper'>
	<div id='product_description'>
	<?php echo $pages['product-list']->post_content; ?>
	</div>
	<div id='product_list'>
	<?php 
	if(!empty($result)) {
		foreach($result as $r) {
			$imgs = explode(";",$r->image_url);
			echo <<<EOT
<a class='product' href='#product_{$r->id}'>
	<img src='{$imgs[0]}'/>
	<p>{$r->name}</p>
</a>
EOT;
		}
	}	
	?>
	</div>
</div> 

<?php 
if(!empty($result)) {
	foreach($result as $r) {
		$imgs = explode(";",$r->image_url);
		$img_div = "";
		
		if(count($imgs) > 1) {
			foreach($imgs as $img) {
				$img_div .= "<img class='product_img' src='{$img}'/>";
			}
		}
		
		echo <<<EOT
<div id='product_{$r->id}' class='product_wrapper'>
	<div class='product_images'>
		<img class='first_product_image' src='{$imgs[0]}'/>
		{$img_div}	
	</div>
					
	<div class='product_info'>
		<h3>{$r->name}</h3>
		<p class='price'>\${$r->price} USD</p>
		<p class='description'>{$r->description}</p>
	</div>
</div>
EOT;
	}
}	
?>

<div style='clear:both'></div>
<div id='footer'>&copy 2015 Nest,INC.</div>