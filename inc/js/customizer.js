jQuery( document ).ready(function($) {
	"use strict";

	var siteWidth = $('#range-site-width');
	var resetSite = $('#reset-site-width');
	
	resetSite.click(function() {
		resetValue(siteWidth, 1280);
	});

	var sidebarWidth = $('#range-sidebar-width');
	var resetSidebar = $('#reset-sidebar-width');

	resetSidebar.click(function() {
		resetValue(sidebarWidth, 25);
	});
	
	function resetValue($element, $resetValue) {
		$element.val($resetValue);
		$element.trigger('change');
	}
	

} );




jQuery( document ).ready(function($) {

// Refresh our hidden field if any fields change
	$('.box-model-field').on('change', function() {
		var inputValues = $('.box-model-field').map(function() {
			return $(this).val();
		}).toArray();
		$('.box-model-saved').val(inputValues);
		$('.box-model-saved').trigger('change');
});

// jquery end box model--
} );


jQuery( document ).ready(function($) {

	// Refresh our hidden field if any fields change
		$('.repeater').on('change', function() {
			var fontSizes = $('.repeater').map(function() {
				return $(this).val();
			}).toArray();
			$('#font-sizes-submit').val(fontSizes);
			$('#font-sizes-submit').trigger('change');
	});
	
	// jquery end --
 } );