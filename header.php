<div id="header">
  <div id="blogTitle">
	  <?php
	    $header = true;
	    include (TEMPLATEPATH . '/searchform.php');
	    $header = false;
	  ?>
	  
	  <h1><?php bloginfo('title'); ?></h1>
	</div>
	
	<div id="blogInfo">
  	<ul>
  		<li id="home" <?php if(is_home()){echo 'class="current_page_item"';}?>><a href="<?php echo get_option('home'); ?>/" title="Home">Home</a></li>
    	<?php wp_list_pages('title_li=&depth=1&sort_column=menu_order');?>
  	</ul>
  	
  	<div id="blogDescription">
    	<h2>
    	<?php 
    	  if($bwd2_intro_header) {
    	    echo $bwd2_intro_header;
    	  }
    	  
    	  else {
    	    echo "About";
    	  }
    	?>
    	</h2>
      <p>
    	<?php 
    	  if($bwd2_intro_message) {
    	    echo $bwd2_intro_message;
    	  }
    	  
    	  else {
    	    bloginfo('description');
    	  }
    	?>
    	</p>
    </div>
  </div>
</div>