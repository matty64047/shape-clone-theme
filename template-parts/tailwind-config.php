/**
 * Tailwind CDN configuration — matches the source site's design tokens.
 *
 * Placed inline in the <head> before the Tailwind CDN script.
 * Matches: https://madebyshape.co.uk/dist/css/app-1ce29d0770.css
 */
tailwind.config = {
	darkMode: 'class',
	theme: {
		fontFamily: {
			sans: [
				'"Oldschool Grotesk"',
				'ui-sans-serif',
				'system-ui',
				'-apple-system',
				'BlinkMacSystemFont',
				'"Segoe UI"',
				'Roboto',
				'"Helvetica Neue"',
				'Arial',
				'"Noto Sans"',
				'sans-serif',
			],
			mono: [
				'ui-monospace',
				'SFMono-Regular',
				'Menlo',
				'Monaco',
				'Consolas',
				'"Liberation Mono"',
				'"Courier New"',
				'monospace',
			],
		},
		extend: {
			colors: {
				// The source site's primary accent — a vibrant chartreuse green
				primary: {
					DEFAULT: '#d0ff71',
					50: '#f6ffe6',
					100: '#eaffcc',
					200: '#d0ff71',
					300: '#b8e642',
					400: '#9fcc28',
					500: '#87b310',
					600: '#6e9900',
					700: '#558000',
					800: '#3d6600',
					900: '#244d00',
					950: '#0e3300',
				},
				// Near-black used for text on white backgrounds
				'text-dark': '#010202',
				// Muted gray for legal footer text
				'muted-gray': '#999a9a',
			},
			fontSize: {
				// Hero heading (matches h1 at 72px / 4.5rem)
				'hero': [ '4.5rem', { lineHeight: '1', letterSpacing: '-0.025em' } ],
				// Intro paragraph (43.2px)
				'intro': [ '2.7rem', { lineHeight: '1', fontWeight: '400' } ],
				// Section heading (48px)
				'section-heading': [ '3rem', { lineHeight: '1.1', fontWeight: '400' } ],
				// Card title (32px)
				'card-title': [ '2rem', { lineHeight: '1.2', fontWeight: '400' } ],
			},
			borderRadius: {
				'2xl': '1rem',
				'3xl': '1.5rem',
			},
			spacing: {
				'18': '4.5rem',
				'22': '5.5rem',
			},
			zIndex: {
				'header': '50',
				'cursor': '9999',
				'overlay': '40',
			},
			animation: {
				'spin-slow': 'spin 8s linear infinite',
			},
		},
	},
};