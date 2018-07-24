/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '#text-title-desc' ).css({
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute'
				});
				// Add class for different logo styles if title and description are hidden.
				$( 'body' ).addClass( 'title-tagline-hidden' );
			} else {
				
				$( '#text-title-desc' ).css({
					clip: 'auto',
					position: 'relative'
				});
				$( '.site-branding a' ).css({
					color: to
				});
				// Add class for different logo styles if title and description are visible.
				$( 'body' ).removeClass( 'title-tagline-hidden' );
			}
		});
	});
	
	wp.customize( 'freak_header_desccolor', function( value ) {
		value.bind( function( to ) {
			$( 'h2.site-description' ).css('color', to );
		});
	});
	
	wp.customize( 'freak_social_1', function( value ) {
		value.bind( function( to ) {
			var ClassNew	=	'fab fa-' + to;
			jQuery('.social-icons' ).find( 'i:eq(0)' ).attr( 'class', ClassNew );
		});
	});
	
	wp.customize( 'freak_social_2', function( value ) {
		value.bind( function( to ) {
			var ClassNew	=	'fab fa-' + to;
			jQuery('.social-icons' ).find( 'i:eq(1)' ).attr( 'class', ClassNew );
		});
	});
	
	wp.customize( 'freak_social_3', function( value ) {
		value.bind( function( to ) {
			var ClassNew	=	'fab fa-' + to;
			jQuery('.social-icons' ).find( 'i:eq(2)' ).attr( 'class', ClassNew );
		});
	});
	
	wp.customize( 'freak_social_4', function( value ) {
		value.bind( function( to ) {
			var ClassNew	=	'fab fa-' + to;
			jQuery('.social-icons' ).find( 'i:eq(3)' ).attr( 'class', ClassNew );
		});
	});
	
	wp.customize( 'freak_social_5', function( value ) {
		value.bind( function( to ) {
			var ClassNew	=	'fab fa-' + to;
			jQuery('.social-icons' ).find( 'i:eq(4)' ).attr( 'class', ClassNew );
		});
	});
	
	wp.customize( 'freak_footer_text', function( value ) {
		value.bind( function ( to ) {
			$( '.custom-info').text( to );
		});
	});
	
} )( jQuery );
