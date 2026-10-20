<?php
/**
 * Theme Name: MadeByShape Clone
 * Theme URI:  https://madebyshape.co.uk/
 * Description: Pixel-perfect recreation of madebyshape.co.uk as a WordPress theme.
 * Version:     1.0.0
 * Author:      Shape Clone
 * Text Domain: shape-clone
 *
 * @package ShapeClone
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SHAPE_THEME_VERSION', '1.0.0' );
define( 'SHAPE_THEME_DIR', get_template_directory() );
define( 'SHAPE_THEME_URL', get_template_directory_uri() );

/**
 * Enqueue theme scripts and styles.
 */
function shape_enqueue_assets(): void {
	// Oldschool Grotesk font-face declarations
	wp_enqueue_style(
		'shape-fonts',
		SHAPE_THEME_URL . '/src/fonts/fonts.css',
		[],
		SHAPE_THEME_VERSION
	);

	// Main stylesheet (Tailwind CDN for dev, replace with build for prod)
	wp_enqueue_style(
		'shape-styles',
		SHAPE_THEME_URL . '/src/css/theme.css',
		[ 'shape-fonts' ],
		SHAPE_THEME_VERSION
	);

	// Enqueue Tailwind via CDN for development (styles match the source site)
	wp_enqueue_script(
		'tailwind-cdn',
		'https://cdn.tailwindcss.com',
		[],
		null,
		[ 'strategy' => 'defer' ]
	);

	// Custom cursor and dark mode
	wp_enqueue_script(
		'shape-dark-mode',
		SHAPE_THEME_URL . '/src/js/dark-mode.js',
		[],
		SHAPE_THEME_VERSION,
		[ 'strategy' => 'defer' ]
	);

	wp_enqueue_script(
		'shape-cursor',
		SHAPE_THEME_URL . '/src/js/cursor.js',
		[],
		SHAPE_THEME_VERSION,
		[ 'strategy' => 'defer' ]
	);

	// Alpine.js (used by the source site for interactivity)
	wp_enqueue_script(
		'alpine-js',
		'https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js',
		[],
		null,
		[ 'strategy' => 'defer' ]
	);
}
add_action( 'wp_enqueue_scripts', 'shape_enqueue_assets' );

/**
 * Decode HTML entities in block titles within the editor.
 * Overridden by theme.json for the front end.
 */
add_filter( 'render_block', function ( string $block_content, array $block ): string {
	if ( str_starts_with( $block['blockName'] ?? '', 'shape/' ) ) {
		$block_content = html_entity_decode( $block_content );
	}
	return $block_content;
}, 10, 2 );

/**
 * Theme supports.
 */
add_action( 'after_setup_theme', function (): void {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	] );

	// Remove default block patterns and styles that conflict
	remove_theme_support( 'core-block-patterns' );
} );

/**
 * Allow SVG uploads.
 */
add_filter( 'upload_mimes', function ( array $mimes ): array {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
} );

/**
 * Remove WP admin bar on front end for cleaner preview.
 */
add_filter( 'show_admin_bar', '__return_false' );