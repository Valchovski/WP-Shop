<div class="wrap">
	<div id="icon-edit" class="icon32 icon32-base-template"><br></div>
	<h2><?php _e( "Fetch 10 Amazon Items", 'dxbase' ); ?></h2>
	
	<div id="dx_page_messages"></div>
	
	<?php
		$dx_ajax_value = get_option( 'dx_option_from_ajax', '' );
	?>
	
	<form id="dx-plugin-base-http-form" action="options.php" method="POST">
			<input type="text" id="dx_url_for_ajax" name="dx_url_for_ajax" value="https://www.amazon.com/Digital-SLRs-Cameras-Photo/b/ref=dp_bc_5?ie=UTF8&node=3017941" />
			
			<input type="submit" value="<?php _e( "Fetch items with AJAX", 'dxbase' ); ?>" />
	</form> <!-- end of #dx-plugin-base-http-form -->
	
	<div id="resource-window">
	</div>
			
</div>