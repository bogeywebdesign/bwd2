<ul class="postInfo">
	<li><span>Categories</span>:  <?php the_category(', ') ?></li>
	<?php the_tags( '<li class="postTags"><span>Tags:</span> ', ', ', '</li>'); ?>
	<?php edit_post_link('(edit this)', '<li class="editInfo">', '</li>'); ?>
</ul>