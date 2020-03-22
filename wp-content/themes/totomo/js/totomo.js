jQuery( function ( $ ) {
	// Header search form click
	var $headerSearch = $( '.header-search' );

	$headerSearch.find( '.search-toggler' ).click( function ( e ) {
		e.preventDefault();
		$headerSearch.toggleClass( 'active-search' );
	} );

	$( '.carousel' ).carousel();

	/**
	 * Scroll to top
	 */
	function scrollToTop() {
		var $window = $( window ),
			$button = $( '#scroll-to-top' );
		$window.scroll( function () {
			$button[$window.scrollTop() > 100 ? 'removeClass' : 'addClass']( 'hidden' );
		} );
		$button.on( 'click', function ( e ) {
			e.preventDefault();
			$( 'body, html' ).animate( {
				scrollTop: 0
			}, 500 );
		} );
	}

	scrollToTop();
} );
