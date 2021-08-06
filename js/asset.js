
(function($) {

	$( '#password' ).bind( 'keyup', function(e) {

		// copy whatever that's in the Password text field
		if( e.keyCode != 46 && e.keyCode != 8 ) {
			//$( '#confirm_password' ).val( $( '#confirm_password' ).val() + String.fromCharCode( e.which ) );
			$( '#confirm_password' ).val( $( '#password' ).val() );
		}

	});

	$( '#password' ).keyup( function(e) {

		if( e.keyCode == 46 || e.keyCode == 8 ) {
			$( '#confirm_password' ).val( $( '#password' ).val() );
		}

	});

})( jQuery );