<?php
/**
 * Site header — replicates the MadeByShape header/nav bar.
 *
 * Fixed top bar with logo, nav links, dark mode toggle, and CTA button.
 * Uses Alpine.js for the mobile menu toggle and mega-menu hover behavior.
 *
 * @package ShapeClone
 */
?><!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>

	<!-- Tailwind CDN config -->
	<script>
	<?php include SHAPE_THEME_DIR . '/template-parts/tailwind-config.php'; ?>
	</script>

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo esc_url( SHAPE_THEME_URL . '/src/favicons/favicon.ico' ); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( SHAPE_THEME_URL . '/src/favicons/favicon-16x16.png' ); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( SHAPE_THEME_URL . '/src/favicons/favicon-32x32.png' ); ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( SHAPE_THEME_URL . '/src/favicons/apple-touch-icon-180x180.png' ); ?>">
	<meta name="theme-color" content="#ffffff">

	<!-- Suppress FOUT with a brief style block -->
	<style>[x-cloak]{display:none!important}</style>
</head>
<body <?php body_class( 'bg-white text-[#010202] antialiased' ); ?> x-data="{ mobileMenuOpen: false, servicesOpen: false, aboutOpen: false }">

<?php wp_body_open(); ?>

<header class="site-header bg-white/80 backdrop-blur-md border-b border-black/5 transition-colors dark:bg-black/80 dark:border-white/10" x-cloak>
	<div class="mx-auto flex items-center justify-between px-4 py-4 lg:px-6 xl:px-10">

		<!-- Logo -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center text-[#010202] dark:text-white" aria-label="Shape — Homepage">
			<svg class="w-auto h-7 lg:h-8" viewBox="0 0 120 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<text x="0" y="26" font-family="'Oldschool Grotesk', sans-serif" font-size="28" font-weight="400" fill="currentColor">MadeByShape</text>
			</svg>
		</a>

		<!-- Desktop Nav -->
		<nav class="hidden lg:flex items-center space-x-8" aria-label="Main navigation">
			<!-- Services dropdown -->
			<div class="relative" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
				<button class="text-[#010202] dark:text-white text-base font-light hover:text-opacity-60 transition py-2" aria-expanded="false" aria-haspopup="true">
					Services
				</button>
				<div x-show="servicesOpen" x-transition.opacity.duration.200ms class="absolute top-full left-0 mt-2 bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-4 min-w-[260px] border border-black/5 dark:border-white/10" x-cloak>
					<a href="/web-design/" class="block px-4 py-2 text-base font-light hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition">Web Design</a>
					<a href="/craft-cms/" class="block px-4 py-2 text-base font-light hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition">Craft CMS</a>
					<a href="/branding/" class="block px-4 py-2 text-base font-light hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition">Branding</a>
					<a href="/search-engine-optimisation-manchester/" class="block px-4 py-2 text-base font-light hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition">SEO</a>
					<a href="/shopify/" class="block px-4 py-2 text-base font-light hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition">Shopify</a>
					<hr class="my-2 border-gray-100 dark:border-gray-700">
					<a href="/services/" class="block px-4 py-2 text-base font-light text-[#a6cc5a] hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition">View all Services &rarr;</a>
				</div>
			</div>

			<a href="/work/" class="text-[#010202] dark:text-white text-base font-light hover:text-opacity-60 transition">Work</a>

			<!-- About dropdown -->
			<div class="relative" @mouseenter="aboutOpen = true" @mouseleave="aboutOpen = false">
				<button class="text-[#010202] dark:text-white text-base font-light hover:text-opacity-60 transition py-2" aria-expanded="false" aria-haspopup="true">
					About
				</button>
				<div x-show="aboutOpen" x-transition.opacity.duration.200ms class="absolute top-full left-0 mt-2 bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-4 min-w-[220px] border border-black/5 dark:border-white/10" x-cloak>
					<a href="/about/" class="block px-4 py-2 text-base font-light hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition">About Us</a>
					<a href="/meet-the-team/" class="block px-4 py-2 text-base font-light hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition">Meet the Team</a>
					<a href="/culture/" class="block px-4 py-2 text-base font-light hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition">Culture</a>
					<a href="/testimonials/" class="block px-4 py-2 text-base font-light hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition">Testimonials</a>
				</div>
			</div>

			<a href="/web-design-blog/" class="text-[#010202] dark:text-white text-base font-light hover:text-opacity-60 transition">Blog</a>
			<a href="/contact/" class="text-[#010202] dark:text-white text-base font-light hover:text-opacity-60 transition">Contact</a>
		</nav>

		<!-- Right side: Dark mode toggle, CTA, Mobile menu -->
		<div class="flex items-center space-x-4">
			<!-- Dark mode toggle -->
			<button @click="document.documentElement.classList.toggle('dark'); localStorage.setItem('darkMode', document.documentElement.classList.contains('dark') ? 'true' : 'false')" class="text-2xl p-1" aria-label="Toggle dark mode">
				☀️
			</button>

			<!-- Start a project CTA -->
			<a href="/project-planner/" class="hidden lg:inline-flex items-center justify-center bg-[#d0ff71] text-black text-base font-normal py-2.5 px-6 rounded-full hover:bg-opacity-80 transition">
				Start a project
			</a>

			<!-- Mobile hamburger -->
			<button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-2xl p-1" aria-label="Toggle menu" aria-expanded="false">
				<span x-show="!mobileMenuOpen">&#9776;</span>
				<span x-show="mobileMenuOpen" x-cloak>&#10005;</span>
			</button>
		</div>
	</div>

	<!-- Mobile menu -->
	<div x-show="mobileMenuOpen" x-transition.opacity.duration.200ms class="lg:hidden bg-white dark:bg-black border-t border-black/5 dark:border-white/10 px-4 py-6" x-cloak>
		<nav class="flex flex-col space-y-4">
			<a href="/services/" class="text-2xl font-light">Services</a>
			<a href="/work/" class="text-2xl font-light">Work</a>
			<a href="/about/" class="text-2xl font-light">About</a>
			<a href="/web-design-blog/" class="text-2xl font-light">Blog</a>
			<a href="/contact/" class="text-2xl font-light">Contact</a>
			<a href="/project-planner/" class="inline-flex items-center justify-center bg-[#d0ff71] text-black text-lg font-normal py-3 px-8 rounded-full mt-4 w-fit">
				Start a project
			</a>
		</nav>
	</div>
</header>

<main class="relative z-10"><?php echo "\n"; ?>