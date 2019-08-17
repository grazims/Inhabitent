<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<!-- <button class="search-toggle" aria-hidden="true">
			 <i class="fa fa-search"></i>
		</button> -->

		<label>
			<input type="search" class="search-field" placeholder="Type and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>

		<input type="submit" id="search-submit" class="screen-reader-text" value="Search">
	</fieldset>
</form>
