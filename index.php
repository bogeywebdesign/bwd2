<?php include(TEMPLATEPATH . '/templates/blog_header_variables.php'); ?>
<?php include(TEMPLATEPATH . '/templates/head.php'); ?>
	
	<?php if (have_posts()) : ?>
		<?php $postnumber = '1' ?>

		<?php while (have_posts()) : the_post(); ?>
		<div class="post<?php if($postnumber == '1') echo " post" . $postnumber; $postnumber++; ?><?php sticky_class(); ?>" id="post-<?php the_ID(); ?>">
			<?php include(TEMPLATEPATH . '/templates/sideInfo.php'); ?>
			  
			<div class="right">
  			<?php include(TEMPLATEPATH . '/templates/titleBlock.php'); ?>

  			<?php the_content('Read the rest of this entry »'); ?>
			
  			<?php include(TEMPLATEPATH . '/templates/postPagination.php'); ?>
			</div>
		</div>
  	<?php endwhile; ?>
	
		<?php include(TEMPLATEPATH . '/templates/backToTop.php'); ?>
	<?php else : ?>
		<?php include(TEMPLATEPATH . '/templates/postNotFound.php'); ?>
	<?php endif; ?>
	
	<?php include(TEMPLATEPATH . '/templates/paginator.php'); ?>
	
	<?php include(TEMPLATEPATH . '/templates/foot.php'); ?>