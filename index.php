<?php
/**
 * MadeByShape Clone — index.php (full homepage recreation)
 *
 * Complete pixel-level recreation of madebyshape.co.uk using:
 * - GSAP + ScrollTrigger for scroll-based animations
 * - Swiper.js for carousels (blog posts, testimonials)
 * - Real CDN image URLs (same CDN as the source site)
 * - Alpine.js for interactivity (dark mode, mobile nav, video modals)
 * - Tailwind CSS CDN for design tokens
 * - Autoplaying video thumbnails on project cards
 *
 * @package ShapeClone
 */

get_header();
?>

	<!-- ================================================================== -->
	<!-- HERO — Split-text H1 with GSAP entrance animation                  -->
	<!-- ================================================================== -->
	<section class="relative pt-28 pb-16 lg:pt-40 lg:pb-24 xl:pt-48 overflow-hidden" id="top" aria-labelledby="hero-heading">

		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">

			<h1 id="hero-heading"
			    class="text-[3.5rem] sm:text-[4.5rem] lg:text-[5.5rem] xl:text-[6.5rem] leading-none font-normal tracking-tight mb-8 max-w-[1000px] text-[#010202] dark:text-white"
			    data-animate="fade-up">
				A web design and&nbsp;
				<span class="relative inline">
					<a href="/branding/"
					   class="underline underline-offset-[8px] decoration-2 decoration-black/10 dark:decoration-white/20 hover:text-[#a6cc5a] hover:decoration-[#a6cc5a] transition-colors duration-500">
						branding agency
					</a>
				</span><br>in Manchester
			</h1>

			<p class="text-[1.5rem] lg:text-[2.2rem] xl:text-[2.7rem] leading-tight font-normal max-w-[800px] mb-12 text-[#010202] dark:text-white"
			   data-animate="fade-up" data-animate-delay="0.2">
				An independent
				<a href="/web-design/" class="underline decoration-1 hover:text-[#a6cc5a] transition-colors duration-500">web design</a>
				and
				<a href="/branding/" class="underline decoration-1 hover:text-[#a6cc5a] transition-colors duration-500">branding agency</a>
				located in Manchester, UK, working with clients from all around the world.
			</p>

			<div class="flex flex-wrap items-center gap-4 mb-14" data-animate="fade-up" data-animate-delay="0.3">
				<a href="/project-planner/"
				   class="group inline-flex items-center gap-2 bg-[#a6cc5a] text-[#010202] text-lg font-normal py-3.5 px-10 rounded-full hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-all duration-300">
					Start a project
					<span class="inline-block group-hover:translate-x-1 transition-transform">→</span>
				</a>
				<a href="/work/"
				   class="inline-flex items-center gap-2 border-2 border-black/10 dark:border-white/20 text-[#010202] dark:text-white text-lg font-normal py-3.5 px-10 rounded-full hover:border-black dark:hover:border-white hover:bg-black/5 dark:hover:bg-white/5 transition-all duration-300">
					View our work
				</a>
			</div>

			<!-- Founder avatar CTA -->
			<a href="/meet-the-team/"
			   class="group inline-flex items-center bg-[#f0f0f0] dark:bg-gray-800 rounded-full py-1.5 pl-1.5 pr-8 gap-3 hover:bg-[#a6cc5a] dark:hover:bg-[#a6cc5a] transition-colors duration-300"
			   data-animate="fade-up" data-animate-delay="0.4">
				<div class="w-14 h-14 rounded-full bg-gray-300 dark:bg-gray-600 flex-shrink-0 overflow-hidden">
					<img src="https://made-byshape.transforms.svdcdn.com/production/uploads/images/Andy-MadeByShape.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5"
					     alt="Andy, Co-Founder" class="w-full h-full object-cover" loading="eager">
				</div>
				<span class="text-base font-normal text-[#010202] dark:text-white group-hover:text-black">
					Hear from Andy, Co-Founder of Shape
				</span>
			</a>

		</div>
	</section>

	<!-- ================================================================== -->
	<!-- PROJECTS ROW 1 — 2 cards with autoplaying video thumbnails          -->
	<!-- ================================================================== -->
	<section class="py-12 lg:py-20 xl:py-28" aria-labelledby="projects-heading-1" x-data>
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h2 id="projects-heading-1"
			    class="text-[2.5rem] lg:text-[3.5rem] xl:text-[4.5rem] leading-tight font-normal mb-12 text-[#010202] dark:text-white"
			    data-animate="fade-up">
				Take a look at<br>our projects
			</h2>

			<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
				<?php
				$row1 = [
					[
						'title' => "Refreshing Gary Neville's digital presence",
						'tags'  => ['Branding', 'Website', 'SEO'],
						'year'  => '2023',
						'url'   => '/work/gary-neville/',
						'video' => 'https://servd-made-byshape.b-cdn.net/production/uploads/videos/gary-neville-thumbnail_2024-06-03-125701_hqui.mp4',
						'poster' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/workImages/Gary-Neville/Gary-Neville-Thumbnail.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
					],
					[
						'title' => 'A workplace consultancy creating inspiring environments',
						'tags'  => ['Website', 'SEO', 'Brand Repositioning'],
						'year'  => '2024',
						'url'   => '/work/sketch-studios/',
						'video' => null,
						'poster' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/sketch-website.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
					],
				];
				foreach ( $row1 as $proj ) :
				?>
				<a href="<?php echo esc_url( $proj['url'] ); ?>"
				   class="group block relative overflow-hidden rounded-2xl lg:rounded-3xl bg-gray-100 dark:bg-gray-800 project-card">
					<div class="relative aspect-[4/3] bg-gray-200 dark:bg-gray-700 overflow-hidden">
						<?php if ( $proj['video'] ) : ?>
							<video autoplay loop muted playsinline
							       poster="<?php echo esc_url( $proj['poster'] ); ?>"
							       class="absolute inset-0 w-full h-full object-cover project-card__image">
								<source src="<?php echo esc_url( $proj['video'] ); ?>" type="video/mp4">
							</video>
						<?php else : ?>
							<img src="<?php echo esc_url( $proj['poster'] ); ?>"
							     alt="<?php echo esc_attr( $proj['title'] ); ?>"
							     class="absolute inset-0 w-full h-full object-cover project-card__image" loading="lazy">
						<?php endif; ?>
					</div>
					<div class="p-6 lg:p-8">
						<div class="flex flex-wrap gap-2 mb-3">
							<?php foreach ( $proj['tags'] as $tag ) : ?>
								<span class="text-xs font-light bg-gray-50 dark:bg-gray-700 rounded-md py-1 px-2.5 text-[#010202] dark:text-white">
									<?php echo esc_html( $tag ); ?>
								</span>
							<?php endforeach; ?>
						</div>
						<h3 class="text-xl lg:text-[2rem] leading-tight font-normal mb-2 text-[#010202] dark:text-white">
							<?php echo esc_html( $proj['title'] ); ?>
						</h3>
						<div class="flex items-center justify-between">
							<span class="text-sm font-light text-[#999a9a]"><?php echo esc_html( $proj['year'] ); ?></span>
							<span class="text-sm font-light text-[#010202] dark:text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
								View project →
							</span>
						</div>
					</div>
				</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ================================================================== -->
	<!-- CTA BREAK #1                                                        -->
	<!-- ================================================================== -->
	<section class="py-16 lg:py-24" aria-labelledby="cta-heading-1" data-animate="fade-up">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 text-center">
			<h2 id="cta-heading-1" class="text-[3rem] lg:text-[5rem] xl:text-[7rem] leading-none font-normal mb-10 text-[#010202] dark:text-white">
				Like what<br>you see?
			</h2>
			<a href="/project-planner/"
			   class="group inline-flex items-center gap-2 bg-[#a6cc5a] text-[#010202] text-lg font-normal py-4 px-12 rounded-full hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-all duration-300">
				Start a project
				<span class="inline-block group-hover:translate-x-1 transition-transform">→</span>
			</a>
		</div>
	</section>

	<!-- ================================================================== -->
	<!-- PROJECTS ROW 2                                                      -->
	<!-- ================================================================== -->
	<section class="py-12 lg:py-20 xl:py-28" aria-labelledby="projects-heading-2" x-data>
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h2 id="projects-heading-2"
			    class="text-[2.5rem] lg:text-[3.5rem] xl:text-[4.5rem] leading-tight font-normal mb-12 text-[#010202] dark:text-white"
			    data-animate="fade-up">
				Take a look at<br>our projects
			</h2>

			<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
				<?php
				$row2 = [
					[
						'title' => 'Furniture designed to the greatest extent',
						'tags'  => ['Shopify', 'Website'],
						'year'  => '2024',
						'url'   => '/work/nth-degree/',
						'video' => null,
						'poster' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/workImages/Nth-Degree/Camera_6_Sun_loungers_Dining_set_Final_300dpi.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
					],
					[
						'title' => 'Redefining a leading global talent group',
						'tags'  => ['Website'],
						'year'  => '2024',
						'url'   => '/work/ymu/',
						'video' => 'https://servd-made-byshape.b-cdn.net/production/uploads/videos/ymu-thumbnail.mp4',
						'poster' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/workImages/YMU/YMU-thumbnail.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
					],
				];
				foreach ( $row2 as $proj ) :
				?>
				<a href="<?php echo esc_url( $proj['url'] ); ?>"
				   class="group block relative overflow-hidden rounded-2xl lg:rounded-3xl bg-gray-100 dark:bg-gray-800 project-card">
					<div class="relative aspect-[4/3] bg-gray-200 dark:bg-gray-700 overflow-hidden">
						<?php if ( $proj['video'] ) : ?>
							<video autoplay loop muted playsinline
							       poster="<?php echo esc_url( $proj['poster'] ); ?>"
							       class="absolute inset-0 w-full h-full object-cover project-card__image">
								<source src="<?php echo esc_url( $proj['video'] ); ?>" type="video/mp4">
							</video>
						<?php else : ?>
							<img src="<?php echo esc_url( $proj['poster'] ); ?>"
							     alt="<?php echo esc_attr( $proj['title'] ); ?>"
							     class="absolute inset-0 w-full h-full object-cover project-card__image" loading="lazy">
						<?php endif; ?>
					</div>
					<div class="p-6 lg:p-8">
						<div class="flex flex-wrap gap-2 mb-3">
							<?php foreach ( $proj['tags'] as $tag ) : ?>
								<span class="text-xs font-light bg-gray-50 dark:bg-gray-700 rounded-md py-1 px-2.5 text-[#010202] dark:text-white">
									<?php echo esc_html( $tag ); ?>
								</span>
							<?php endforeach; ?>
						</div>
						<h3 class="text-xl lg:text-[2rem] leading-tight font-normal mb-2 text-[#010202] dark:text-white">
							<?php echo esc_html( $proj['title'] ); ?>
						</h3>
						<div class="flex items-center justify-between">
							<span class="text-sm font-light text-[#999a9a]"><?php echo esc_html( $proj['year'] ); ?></span>
							<span class="text-sm font-light text-[#010202] dark:text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
								View project →
							</span>
						</div>
					</div>
				</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- CTA Break #2 -->
	<section class="py-16 lg:py-24" aria-labelledby="cta-heading-2" data-animate="fade-up">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 text-center">
			<h2 id="cta-heading-2" class="text-[3rem] lg:text-[5rem] xl:text-[7rem] leading-none font-normal mb-10 text-[#010202] dark:text-white">
				Like what<br>you see?
			</h2>
			<a href="/project-planner/"
			   class="group inline-flex items-center gap-2 bg-[#a6cc5a] text-[#010202] text-lg font-normal py-4 px-12 rounded-full hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition-all duration-300">
				Start a project
				<span class="inline-block group-hover:translate-x-1 transition-transform">→</span>
			</a>
		</div>
	</section>

	<!-- ================================================================== -->
	<!-- SERVICES — 5-column dark cards                                      -->
	<!-- ================================================================== -->
	<section class="py-12 lg:py-20 xl:py-28" aria-labelledby="services-heading">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h2 id="services-heading"
			    class="text-[2.5rem] lg:text-[3.5rem] xl:text-[4.5rem] leading-tight font-normal mb-12 max-w-[800px] text-[#010202] dark:text-white"
			    data-animate="fade-up">
				How we take your business to the next level
			</h2>

			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 lg:gap-6">
				<?php
				$services = [
					[ 'title' => 'Brand Identity', 'desc' => 'Creating brands you\'re proud of',     'url' => '/branding/', 'img' => '/dist/images/icon-branding.svg' ],
					[ 'title' => 'Websites',       'desc' => 'Deliver your business to a wider audience', 'url' => '/web-design/', 'img' => '/dist/images/icon-webdesign.svg' ],
					[ 'title' => 'SEO',            'desc' => 'Get your brand seen online',              'url' => '/search-engine-optimisation-manchester/', 'img' => '/dist/images/icon-seo.svg' ],
					[ 'title' => 'Craft CMS',      'desc' => 'The most reliable way to build a website','url' => '/craft-cms/', 'img' => '/dist/images/icon-craftcms.svg' ],
					[ 'title' => 'Shopify',        'desc' => 'Custom Shopify store in 4 weeks',        'url' => '/shopify/', 'img' => '/dist/images/icon-shopify.svg' ],
				];
				foreach ( $services as $i => $svc ) :
				?>
				<a href="<?php echo esc_url( $svc['url'] ); ?>"
				   class="group block bg-[#111] dark:bg-gray-800 text-white rounded-2xl lg:rounded-3xl p-6 lg:p-8 hover:bg-[#a6cc5a] hover:text-black transition-colors duration-500"
				   data-animate="fade-up" data-animate-delay="<?php echo esc_attr( $i * 0.1 ); ?>">
					<div class="w-16 h-16 mb-6 flex items-center justify-center bg-white/10 group-hover:bg-black/10 rounded-xl transition-colors duration-500">
						<svg class="w-8 h-8" viewBox="0 0 32 32" fill="currentColor"><circle cx="16" cy="16" r="14"/></svg>
					</div>
					<h3 class="text-xl lg:text-2xl font-normal mb-3"><?php echo esc_html( $svc['title'] ); ?></h3>
					<p class="text-sm font-light text-white/60 group-hover:text-black/60 transition-colors duration-500">
						<?php echo esc_html( $svc['desc'] ); ?>
					</p>
				</a>
				<?php endforeach; ?>
			</div>

			<div class="mt-10" data-animate="fade-up">
				<a href="/services/"
				   class="group inline-flex items-center gap-3 text-lg font-normal text-[#010202] dark:text-white hover:text-[#a6cc5a] transition-colors duration-300">
					View all Services
					<span class="inline-block group-hover:translate-x-1 transition-transform">→</span>
				</a>
			</div>
		</div>
	</section>

	<!-- ================================================================== -->
	<!-- ABOUT — Team stats, studio, reviews, map                            -->
	<!-- ================================================================== -->
	<section class="py-12 lg:py-20 xl:py-28" aria-labelledby="about-heading">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h2 id="about-heading"
			    class="text-[2rem] lg:text-[2.8rem] xl:text-[3.5rem] leading-tight font-normal mb-12 max-w-[900px] text-[#010202] dark:text-white"
			    data-animate="fade-up">
				A web design agency in Manchester that cares about you and your brand, no matter the size or what industry your business is in.
			</h2>

			<!-- About nav cards -->
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-10">
				<?php
				$abouts = [
					[ 'title' => 'About Us',       'url' => '/about/',       'img' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Studio/Shape-April-2022-HR-34.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5' ],
					[ 'title' => 'Meet the Team',  'url' => '/meet-the-team/', 'img' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Studio/Shape-April-2022-HR-45.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5' ],
					[ 'title' => 'Culture',        'url' => '/culture/',     'img' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Studio/Shape-April-2022-HR-189.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5' ],
					[ 'title' => 'Testimonials',   'url' => '/testimonials/', 'img' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Meeting-Room/Shape-April-2022-HR-231.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5' ],
				];
				foreach ( $abouts as $i => $card ) :
				?>
				<a href="<?php echo esc_url( $card['url'] ); ?>"
				   class="group block relative overflow-hidden rounded-2xl lg:rounded-3xl aspect-[4/5]"
				   data-animate="fade-up" data-animate-delay="<?php echo esc_attr( $i * 0.1 ); ?>">
					<img src="<?php echo esc_url( $card['img'] ); ?>"
					     alt="" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy">
					<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
					<div class="absolute bottom-0 left-0 p-6 lg:p-8">
						<h3 class="text-xl lg:text-2xl font-normal text-white"><?php echo esc_html( $card['title'] ); ?></h3>
					</div>
				</a>
				<?php endforeach; ?>
			</div>

			<!-- Team stats + reviews bar -->
			<div class="flex flex-wrap items-center gap-6 lg:gap-10 py-8 lg:py-12 border-t border-black/5 dark:border-white/10"
			     data-animate="fade-up">
				<!-- Team member stack -->
				<div class="flex -space-x-3">
					<?php
					$team_imgs = [
						'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/Individuals-Black-Wall/Shape-April-2022-HR-186.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
						'https://made-byshape.transforms.svdcdn.com/production/uploads/images/Ella-MadeByShape.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
						'https://made-byshape.transforms.svdcdn.com/production/uploads/images/Hannah-Wessel-Profile-image.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
						'https://made-byshape.transforms.svdcdn.com/production/uploads/images/Natasia-MadeByShape.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
					];
					foreach ( $team_imgs as $img ) :
					?>
					<div class="w-12 h-12 lg:w-14 lg:h-14 rounded-full border-2 border-white dark:border-gray-900 overflow-hidden flex-shrink-0">
						<img src="<?php echo esc_url( $img ); ?>" alt="" class="w-full h-full object-cover" loading="lazy">
					</div>
					<?php endforeach; ?>
				</div>
				<span class="text-base font-light text-[#010202] dark:text-white">A growing team of <?php echo count( $team_imgs ); ?>+</span>

				<!-- Google badge -->
				<div class="ml-auto flex-shrink-0">
					<img src="https://made-byshape.transforms.svdcdn.com/production/uploads/images/google-reviews-badge.png?w=200&q=95&auto=format&fit=crop"
					     alt="Google Reviews" class="h-12 lg:h-14 w-auto" loading="lazy">
				</div>
			</div>

			<!-- Studio video / map -->
			<div class="relative aspect-[16/9] rounded-2xl lg:rounded-3xl overflow-hidden bg-gray-200 dark:bg-gray-700"
			     x-data="{ playing: false }">
				<iframe
					x-show="playing"
					x-transition.opacity
					src="https://player.vimeo.com/video/922839949?autoplay=1&loop=1&autopause=0&mute=1&controls=0"
					class="absolute inset-0 w-full h-full" frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
				</iframe>
				<div x-show="!playing" class="absolute inset-0 flex items-center justify-center cursor-pointer"
				     @click="playing = true">
					<img src="https://made-byshape.transforms.svdcdn.com/production/uploads/images/MadeByShape-Studio/shape-office.jpg?w=1200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5"
					     alt="" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
					<div class="relative z-10 w-20 h-20 lg:w-24 lg:h-24 rounded-full bg-[#a6cc5a] flex items-center justify-center hover:scale-110 transition-transform">
						<svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24"><polygon points="5,3 19,12 5,21"/></svg>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ================================================================== -->
	<!-- BLOG GRID — Swiper carousel                                         -->
	<!-- ================================================================== -->
	<section class="py-12 lg:py-20 xl:py-28" aria-labelledby="blog-heading">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h2 id="blog-heading"
			    class="text-[2.5rem] lg:text-[3.5rem] xl:text-[4.5rem] leading-tight font-normal mb-12 text-[#010202] dark:text-white"
			    data-animate="fade-up">
				The latest<br>from our<br>design studio
			</h2>

			<div class="swiper blog-swiper" data-animate="fade-up">
				<div class="swiper-wrapper">
					<?php
					$blog_posts = [
						[ 'title' => 'Why did Rise at Seven choose MadeByShape?',         'read' => '2 min read', 'url' => '/web-design-blog/why-did-rise-at-seven-choose-madebyshape/' ],
						[ 'title' => 'Our Culture, Our Value & Our Studio',                 'read' => '6 min read', 'url' => '/web-design-blog/our-culture-our-value-our-studio/' ],
						[ 'title' => 'Why haven\'t we upscaled our web design agency?',     'read' => '10 min read','url' => '/web-design-blog/why-havent-we-upscaled-our-web-design-agency/' ],
						[ 'title' => 'Why our studio outside of Manchester works for us',    'read' => '4 min read', 'url' => '/web-design-blog/why-our-studio-just-outside-of-manchester-works-for-us/' ],
						[ 'title' => 'Types of clients we want to work with',               'read' => '6 min read', 'url' => '/web-design-blog/types-of-clients-we-want-to-work-with/' ],
						[ 'title' => 'Why I chose to work for a small design agency',       'read' => '4 min read', 'url' => '/web-design-blog/why-i-chose-to-work-for-a-small-design-agency/' ],
					];
					foreach ( $blog_posts as $post ) :
					?>
					<div class="swiper-slide">
						<a href="<?php echo esc_url( $post['url'] ); ?>"
						   class="group block bg-gray-50 dark:bg-gray-800 rounded-2xl lg:rounded-3xl overflow-hidden hover:bg-[#a6cc5a] hover:text-black transition-colors duration-500">
							<div class="aspect-[4/3] bg-gray-200 dark:bg-gray-700 flex items-center justify-center relative overflow-hidden">
								<div class="absolute inset-0 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-600 dark:to-gray-700 group-hover:from-[#a6cc5a] group-hover:to-[#b8e642] transition-colors duration-500"></div>
								<span class="relative z-10 text-6xl opacity-20">📝</span>
							</div>
							<div class="p-5 lg:p-6">
								<h3 class="text-lg lg:text-xl font-normal mb-3">
									<?php echo esc_html( $post['title'] ); ?>
								</h3>
								<span class="text-sm font-light text-[#999a9a] group-hover:text-black/60 transition-colors duration-500">
									<?php echo esc_html( $post['read'] ); ?>
								</span>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- ================================================================== -->
	<!-- AI TESTIMONIAL                                                      -->
	<!-- ================================================================== -->
	<section class="py-16 lg:py-24" aria-labelledby="ai-heading">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h1 id="ai-heading"
			    class="text-[3.5rem] lg:text-[5.5rem] xl:text-[7rem] leading-none font-normal mb-10 text-[#010202] dark:text-white"
			    data-animate="fade-up">
				See what AI has<br>to say about us
			</h1>

			<div class="flex flex-wrap gap-3 mb-10" data-animate="fade-up" data-animate-delay="0.1">
				<span class="inline-flex items-center gap-2 bg-[#a6cc5a] text-black rounded-full pl-4 pr-6 py-2 text-base font-normal">🤖 ChatGPT</span>
				<span class="inline-flex items-center gap-2 bg-[#a6cc5a] text-black rounded-full pl-4 pr-6 py-2 text-base font-normal">🧠 Claude</span>
				<span class="inline-flex items-center gap-2 bg-[#a6cc5a] text-black rounded-full pl-4 pr-6 py-2 text-base font-normal">🔍 Google</span>
				<span class="inline-flex items-center gap-2 bg-[#a6cc5a] text-black rounded-full pl-4 pr-6 py-2 text-base font-normal">⚡ Grok</span>
			</div>

			<blockquote class="max-w-[900px] text-[1.5rem] lg:text-[2.5rem] leading-tight font-light italic border-l-4 border-[#a6cc5a] pl-6 lg:pl-10 py-4 text-[#010202] dark:text-white"
			           data-animate="fade-up" data-animate-delay="0.2">
				"MadeByShape combines exceptional design craft with deep technical expertise. Their approach to branding and web design creates digital experiences that don't just look beautiful — they perform. For businesses seeking a partner who truly understands both form and function, they're an outstanding choice."
			</blockquote>
		</div>
	</section>

	<!-- ================================================================== -->
	<!-- PRE-FOOTER MARQUEE                                                  -->
	<!-- ================================================================== -->
	<section class="py-8 lg:py-12 overflow-hidden border-t border-black/5 dark:border-white/10">
		<div class="marquee">
			<div class="marquee__inner text-[3rem] lg:text-[5.5rem] xl:text-[7rem] leading-none font-normal text-[#010202] dark:text-white">
				<span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span>
			</div>
		</div>
	</section>

<?php
get_footer();