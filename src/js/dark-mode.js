/**
 * Dark mode initialization — replicates the source site's behavior.
 *
 * The source site checks localStorage first, then falls back to the
 * prefers-color-scheme media query. It toggles a `dark` class on <html>.
 */
(function () {
	try {
		var stored = localStorage.getItem( 'darkMode' );
		if ( stored === null || stored === undefined ) {
			if ( window.matchMedia && window.matchMedia( '(prefers-color-scheme: dark)' ).matches ) {
				localStorage.setItem( 'darkMode', 'true' );
				document.documentElement.classList.add( 'dark' );
			} else {
				localStorage.setItem( 'darkMode', 'false' );
			}
		} else {
			if ( stored === 'true' ) {
				document.documentElement.classList.add( 'dark' );
			}
		}
	} catch ( e ) {
		// localStorage may be unavailable — silently ignore
	}
})();