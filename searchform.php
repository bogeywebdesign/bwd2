	<form id="searchform" action="<?php bloginfo('url'); ?>/" method="get">
	<fieldset id="search">
		<?php if($header == false) echo "<h3>Find Entries</h3>" ?>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		
		<input class="submit" type="submit" id="searchsubmit" value="GO" />
	</fieldset>
	</form>
