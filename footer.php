<?php
/**
 * Site footer — replicates the MadeByShape footer.
 *
 * Dark section with social links, link columns, contact info,
 * back-to-top link, and legal bar.
 *
 * @package ShapeClone
 */
?>
</main><!-- /main -->

<footer class="site-footer bg-white text-[#010202] rounded-t-[24px] lg:rounded-t-[40px] -mt-6 pt-6 pb-4 lg:pt-10 lg:pb-6 xl:pt-14" role="contentinfo">

	<!-- Dark callout section -->
	<div class="bg-[#0e0f11] text-white rounded-bl-2xl rounded-tr-2xl lg:rounded-bl-3xl lg:rounded-tr-3xl mx-4 lg:mx-6 xl:mx-10 px-6 py-10 lg:px-10 lg:py-14 xl:px-14 xl:py-16">

		<!-- Social links row -->
		<div class="flex flex-wrap items-center gap-6 mb-10">
			<?php
			$social_links = [
				'LinkedIn'  => 'https://www.linkedin.com/company/madebyshape/mycompany/',
				'Twitter'   => 'https://twitter.com/madebyshape',
				'GitHub'    => 'https://github.com/madebyshape/',
				'Instagram' => 'https://instagram.com/madebyshape',
				'Behance'   => 'https://www.behance.net/madebyshape',
			];
			foreach ( $social_links as $name => $url ) :
				?>
				<a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer"
				   class="text-white text-base font-light hover:text-[#d0ff71] transition">
					<?php echo esc_html( $name ); ?>
				</a>
			<?php endforeach; ?>
		</div>

		<!-- Large CTA -->
		<div class="mb-10">
			<h2 class="text-[4rem] lg:text-[6rem] xl:text-[8rem] leading-none font-normal mb-6">
				Do you like<br>what you see?
			</h2>
			<a href="/project-planner/"
			   class="inline-flex items-center justify-center bg-[#d0ff71] text-black text-lg font-normal py-3 px-8 rounded-full hover:bg-opacity-80 transition">
				Start a project
			</a>
		</div>

		<!-- Link columns row -->
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12 py-10 border-t border-white/10">

			<!-- Learn column -->
			<div class="space-y-3">
				<h3 class="text-lg font-normal mb-4">Learn</h3>
				<?php
				foreach ( [
					'About'       => '/about/',
					'Culture'     => '/culture/',
					'Testimonials' => '/testimonials/',
					'Processes'   => '/processes/',
					'FAQs'        => '/frequently-asked-questions/',
					'Branding FAQs' => '/branding-faqs/',
					'Blog'        => '/web-design-blog/',
				] as $label => $href ) :
					?>
					<a href="<?php echo esc_url( $href ); ?>" class="block text-sm font-light text-white/70 hover:text-white transition">
						<?php echo esc_html( $label ); ?>
					</a>
				<?php endforeach; ?>
			</div>

			<!-- Explore column -->
			<div class="space-y-3">
				<h3 class="text-lg font-normal mb-4">Explore</h3>
				<?php
				foreach ( [
					'Home'     => '/',
					'Work'     => '/work/',
					'Services' => '/services/',
					'Careers'  => '/careers/',
					'Sectors'  => '/sectors/',
					'Hex Test' => '/hex-test/',
					'Contact'  => '/contact/',
				] as $label => $href ) :
					?>
					<a href="<?php echo esc_url( $href ); ?>" class="block text-sm font-light text-white/70 hover:text-white transition">
						<?php echo esc_html( $label ); ?>
					</a>
				<?php endforeach; ?>
			</div>

			<!-- Get in touch column -->
			<div class="space-y-3">
				<h3 class="text-lg font-normal mb-4">Get in touch</h3>
				<a href="tel:01942894596" class="block text-sm font-light text-white/70 hover:text-white transition">
					01942 894 596
				</a>
				<a href="mailto:hello@madebyshape.co.uk" class="block text-sm font-light text-white/70 hover:text-white transition">
					hello@madebyshape.co.uk
				</a>
				<address class="text-sm font-light text-white/70 not-italic">
					MadeByShape, 1 Gibfield Park Avenue<br>
					Atherton, Manchester, M46 0SU
				</address>
				<a href="https://what3words.com/topped.little.pirate" target="_blank" rel="noopener"
				   class="block text-sm font-light text-white/70 hover:text-white transition">
					///topped.little.pirate
				</a>
			</div>
		</div>

		<!-- "Crafting since 2010" large text -->
		<div class="text-[4rem] lg:text-[6rem] xl:text-[8rem] leading-none font-normal text-white/5 select-none text-center py-6">
			Crafting since 2010
		</div>

		<!-- Bottom bar -->
		<div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-6 border-t border-white/10 text-sm text-[#999a9a]">
			<div class="flex flex-wrap items-center gap-x-6 gap-y-2">
				<a href="/" class="hover:text-white transition">Web Design Manchester</a>
				<a href="/privacy-policy/" class="hover:text-white transition">Privacy Policy</a>
			</div>
			<div class="text-center sm:text-right">
				&copy; MadeByShape Ltd <?php echo esc_html( gmdate( 'Y' ) ); ?> &middot;
				Company Reg No 10529058 &middot;
				All Rights Reserved
			</div>
		</div>
	</div>

	<!-- Back to top -->
	<div class="text-center pt-6 pb-4">
		<a href="#top" class="text-sm font-light text-[#999a9a] hover:text-[#010202] transition">
			Sh*t I've gone too far, send me back up 👆
		</a>
	</div>

</footer>

<?php wp_footer(); ?>

<!-- ========================================================================== -->
<!-- GSAP ScrollTrigger - fade-up entrance animations on [data-animate] elements -->
<!-- ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray('[data-animate="fade-up"]').forEach(function(el) {
var delay = parseFloat(el.getAttribute('data-animate-delay')) || 0;
gsap.fromTo(el, { y: 60, opacity: 0 }, {
y: 0, opacity: 1, duration: 1, delay: delay,
ease: 'power3.out',
scrollTrigger: { trigger: el, start: 'top 85%', toggleActions: 'play none none none' }
});
});

window.addEventListener('load', function() { ScrollTrigger.refresh(); });
});
</script>

<!-- ========================================================================== -->
<!-- Swiper.js - blog post carousel                                               -->
<!-- ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
if (typeof Swiper === 'undefined') return;

new Swiper('.blog-swiper', {
slidesPerView: 1.2, spaceBetween: 16, centeredSlides: false, loop: false,
breakpoints: {
640: { slidesPerView: 2, spaceBetween: 20 },
1024: { slidesPerView: 3, spaceBetween: 24 }
}
});
});
</script>
</body>
</html>