/* sample script here */

jQuery(document).ready(function($) {
	
	// Handle the AJAX field save action
	$('#dx-plugin-base-ajax-form').on('submit', function(e) {
		e.preventDefault();
		
		var ajax_field_value = $('#dx_option_from_ajax').val();
		
		 $.post(ajaxurl, {
			 	data: { 'dx_option_from_ajax': ajax_field_value },
		             action: 'store_ajax_value'
				 }, function(status) {
					 	 $('#dx_page_messages').html('Value updated successfully');
		           }
		);
	});
	
	// Handle the AJAX URL fetcher
	$('#dx-plugin-base-http-form').on('submit', function(e) {
		e.preventDefault();
		
		var ajax_field_value = $('#dx_url_for_ajax').val();
		
		 $.post(ajaxurl, {
			 	data: { 'dx_url_for_ajax': ajax_field_value },
		             action: 'fetch_ajax_url_http'
				 }, function(status) {
					 	 $('#dx_page_messages').html('The items are being fetched...');
					 	 $('#resource-window').html( '<p>Top 10 Results: </br>' + status + '</p>');
		           }
		);
	});
});