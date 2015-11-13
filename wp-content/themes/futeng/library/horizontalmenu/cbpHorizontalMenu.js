/**
 * cbpHorizontalMenu.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var cbpHorizontalMenu;
jQuery(function($) {
	cbpHorizontalMenu = (function() {
	
		var $listItems = $( '.cbp-hrmenu > ul > li' ),
			$menuItems = $listItems.children( 'a' ),
			$body = $( 'body' ),
			current = -1;
	
		function init() {	
			$listItems.hover(open, close);
		}
	
		function open( event ) {		
			console.log($listItems);
			if( current !== -1 ) {
				$listItems.eq( current ).removeClass( 'cbp-hropen' );
			}
	
			var $item = $( event.currentTarget ),
				idx = $item.index();
	
			if( current === idx ) {
				$item.removeClass( 'cbp-hropen' );
				current = -1;
			}
			else {
				$item.addClass( 'cbp-hropen' );
				current = idx;				
			}
	
		}
	
		function close( event ) {
			$listItems.eq( current ).removeClass( 'cbp-hropen' );
			current = -1;
		}
	
		return { init : init };
	
	})();
});