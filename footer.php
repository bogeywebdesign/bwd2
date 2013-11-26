<div id="footer"><div>
	<?php wp_footer(); ?>
	
	<p id="designedBy">Designed by <a href="http://www.bogeywebdesign.com">Bogey Web Design</a></p>
	
	<ul>
		<li id="home" <?php if(is_home()){echo 'class="current_page_item"';}?>><a href="<?php echo get_option('home'); ?>/" title="Home">Home</a></li>
  	<?php wp_list_pages('title_li=&depth=1&sort_column=menu_order');?>
	</ul>

	<p id="copyright"><?php echo copyright(); ?> | <?php echo bloginfo('name'); ?></p>
</div></div>
