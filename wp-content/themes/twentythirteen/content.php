<?php $pages = load_page(); ?>
<div id='banner_wrapper'>
	<img id='banner_text' src='/images/menu_4.png'/>
	<img id='banner_see_how' src='/images/menu_2.png'/>
	<img id='banner' src='<?php header_image(); ?>'/>
</div>
<div id='video_page'>
	<?php echo $pages['video_page']->post_content; ?>
</div>
<div id='slideshow_page'>
	<?php echo $pages['slideshow']->post_content; ?>
	<p id='slideshow_page_title'>
	<?php 
	if(!empty($pages['slideshow']->meta)) {
		foreach($pages['slideshow']->meta as $r) {
			if($r->meta_key == 'title') 
				echo $r->meta_value;
		}
	}
	?>
	</p>
	<a href='/slideshow' id='slideshow_link'><img src='/images/slideshow_page_button.png'/></a>
</div>
<div id='product_page'>
	<?php echo $pages['product']->post_content; ?>
	<div style='clear:both'></div>
</div>

<div style='clear:both'></div>

<div id='how_to_page'>
	<ul id='how_to_list'>
		<li><a href='/plan'><img src='/images/icons/button-09.png'/></a></li>
		<li><a href='/prepare'><img src='/images/icons/button-10.png'/></a></li>
		<li><a href='/peel'><img src='/images/icons/button-11.png'/></a></li>
		<li><a href='/place'><img src='/images/icons/button-12.png'/></a></li>
		<li><a href='/contact'><img src='/images/icons/button-13.png'/></a></li>
	</ul>
	<div id='how_to_wrapper'>
		<ul id='how_to_list2'>
			<li><a href='/plan'><img src='/images/icons/button-04.png'/></a></li>
			<li><a href='/prepare'><img src='/images/icons/button-05.png'/></a></li>
			<li><a href='/peel'><img src='/images/icons/button-06.png'/></a></li>
			<li><a href='/place'><img src='/images/icons/button-07.png'/></a></li>
			<li><a href='/contact'><img src='/images/icons/button-08.png'/></a></li>
		</ul>
		
		<div id='how_to_video'></div>
		<div id='how_to_button'>
			<a href='#'><a target='_blank' href='/pdf/Installation_Guide.pdf'><img src='/images/icons/button-14.png'/></a></a>
			<a href='#'><img src='/images/icons/button-15.png'/></a>
		</div>
	</div>
</div>

<div style='clear:both'></div>