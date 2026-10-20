/**
 * Custom cursor — replicates the source site's circle-follow cursor.
 *
 * The original MadeByShape site uses a custom cursor element (`.js-cursor`)
 * that follows the mouse position with smooth transitions.
 */
(function () {
	if ( ! window.matchMedia( '(hover: hover)' ).matches ) {
		return; // No custom cursor on touch devices
	}

	document.addEventListener( 'DOMContentLoaded', function () {
		var cursor = document.querySelector( '.shape-cursor' );
		if ( ! cursor ) {
			cursor = document.createElement( 'div' );
			cursor.className = 'shape-cursor';
			cursor.setAttribute( 'aria-hidden', 'true' );
			cursor.innerHTML =
				'<div class="shape-cursor-inner"></div>';
			document.body.appendChild( cursor );
		}

		var inner = cursor.querySelector( '.shape-cursor-inner' );
		var pos = { x: 0, y: 0 };
		var mouse = { x: 0, y: 0 };

		function update() {
			pos.x += ( mouse.x - pos.x ) * 0.15;
			pos.y += ( mouse.y - pos.y ) * 0.15;
			var tx = 'translate(' + Math.round( pos.x ) + 'px,' + Math.round( pos.y ) + 'px)';
			cursor.style.transform = tx;
			requestAnimationFrame( update );
		}

		document.addEventListener( 'mousemove', function ( e ) {
			mouse.x = e.clientX;
			mouse.y = e.clientY;
		} );

		// Show/hide cursor on similar triggers as source site
		document.addEventListener( 'mouseenter', function () {
			cursor.style.opacity = '1';
		} );
		document.addEventListener( 'mouseleave', function () {
			cursor.style.opacity = '0';
		} );

		requestAnimationFrame( update );
	} );
})();