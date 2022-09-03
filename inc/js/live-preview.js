/* global wp, jQuery */
/**
 * File customizer js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

 ( function( $ ) {
	// 1  Site title /   2  description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	//  3  Header text color.
	wp.customize( 'header-bg-color', function( value ) {
		value.bind( function( newval ) {
			$( '.site-header' ).css('background-color', newval);
			} );
			
		} );

	//  4  Menu text color.
	wp.customize( 'menu-items-color', function( value ) {
		value.bind( function( newval ) {
			$( '.site-navigation ul li a' ).css('color', newval);
			} );
			
		} );

		//  5  Site bg color.
	wp.customize( 'site-bg-color', function( value ) {
		value.bind( function( newval ) {
			$( 'body' ).css('background-color', newval);
			} );
			
		} );

		//  6  Content bg color.
	wp.customize( 'content-bg-color', function( value ) {
		value.bind( function( newval ) {
			$( '.single-post-content').css('background-color', newval);
			} );
			
		} );

		//  7  Link color.
	wp.customize( 'link-color', function( value ) {
		value.bind( function( newval ) {
			$( 'a:link').css('color', newval);
			} );
			
		} );


	// 	//  8  breadcrumb.
	// wp.customize( 'meta-breadcrumb', function( value ) {
	// 	value.bind( function( newval ) {
	// 		if(!newval)
	// 		{
	// 			newval = none;
	// 			$( 'article .breadcrumb').css('display', newval);
	// 		}
	// 		} );
	// 	} );

		//  9  Sidebar Bg color.
	wp.customize( 'sidebar-bg-color', function( value ) {
		value.bind( function( newval ) {
			$( '.sidebar-right').css('background-color', newval);
		} );			
	} );

		//  10  Widget Bg color.
	wp.customize( 'widgets-bg-color', function( value ) {
		value.bind( function( newval ) {
			$( '.sidebar-right .widget').css('background-color', newval);
		} );			
	} );

	// 	//  11  Widget Space / margin.
	// wp.customize( 'widgets-space', function( value ) {
	// 	value.bind( function( newval ) {
	// 		$( '.sidebar-right .widget').css("margin-top", newval);
	// 	} );			
	// } );

	// //  12  Menu Font size.
	// wp.customize( 'menu-font-size', function( value ) {
	// 	value.bind( function( newval ) {
	// 		$( '.site-navigation ul li a').css("font-size", newval);
	// 	} );			
	// } );

	// //  13  Submenu font size.
	// wp.customize( 'submenu-font-size', function( value ) {
	// 	value.bind( function( newval ) {
	// 		$( '.site-navigation ul li a').css("font-size", newval);
	// 	} );			
	// } );





}( jQuery ) );
