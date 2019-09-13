<?php

//
// Final Decisions rev 3
// Search form file
// Last update: Rev 3a1 on August 24, 2019
//

?>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s" hidden>Search for:</label>
		<input type="text" placeholder="Search Posts" value="" name="s" id="s">
		<input type="submit" id="searchsubmit" value="Search" hidden>
	</div>
</form>
