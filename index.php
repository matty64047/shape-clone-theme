<?php
/**
 * Homepage template — assembles the clone of madebyshape.co.uk.
 *
 * Each section is a custom block registered elsewhere and placed
 * here via block template or hard-coded block markup.
 *
 * @package ShapeClone
 */

get_header(); ?>

	<!-- ================================================================ -->
	<!-- HERO SECTION                                                      -->
	<!-- ================================================================ -->
	<section class="pt-20 pb-10 lg:pt-32 lg:pb-16 xl:pt-40 relative overflow-hidden" id="top" aria-labelledby="hero-heading">

		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">

			<!-- H1 with inline links (matches source: 72px, fw:400, lh:1) -->
			<h1 id="hero-heading" class="text-[3.5rem] lg:text-[4.5rem] leading-none font-normal tracking-[-0.025em] mb-8 max-w-[900px]">
				A web design and&nbsp;
				<span class="inline">
					<a href="/web-design/" class="underline underline-offset-[6px] decoration-1 hover:text-[#d0ff71] transition">branding agency</a>
				</span>
				<br>in Manchester
			</h1>

			<!-- Intro paragraph (43.2px, fw:400, lh:1) -->
			<p class="text-[1.7rem] lg:text-[2.7rem] leading-none font-normal max-w-[800px] mb-10">
				An independent
				<a href="/web-design/" class="underline decoration-1 hover:text-[#d0ff71] transition">web design</a>
				and
				<a href="/branding/" class="underline decoration-1 hover:text-[#d0ff71] transition">branding agency</a>
				located in Manchester, UK, working with clients from all around the world.
			</p>

			<!-- CTAs -->
			<div class="flex flex-wrap items-center gap-4 mb-12">
				<a href="/project-planner/" class="inline-flex items-center justify-center bg-[#d0ff71] text-black text-lg font-normal py-3 px-8 rounded-full hover:bg-opacity-80 transition">
					Start a project
				</a>
				<a href="/work/" class="inline-flex items-center justify-center border border-black/10 dark:border-white/20 text-[#010202] dark:text-white text-lg font-normal py-3 px-8 rounded-full hover:bg-black/5 transition">
					View our work
				</a>
			</div>

			<!-- Founder CTA circle -->
			<a href="/meet-the-team/" class="inline-flex items-center bg-black/5 rounded-full py-1.5 pl-1.5 pr-8 gap-3 hover:bg-black/10 transition">
				<div class="w-12 h-12 rounded-full bg-gray-300 flex-shrink-0 overflow-hidden">
					<!-- Placeholder avatar — would be Andy's photo -->
					<div class="w-full h-full flex items-center justify-center text-xl">👤</div>
				</div>
				<span class="text-base font-normal">
					Hear from Andy, Co-Founder of Shape
				</span>
			</a>

		</div>
	</section>

	<!-- ================================================================ -->
	<!-- FEATURED PROJECTS — "Take a look at our projects"                 -->
	<!-- ================================================================ -->
	<section class="py-12 lg:py-20 xl:py-24" aria-labelledby="projects-heading-1">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h2 id="projects-heading-1" class="text-[2rem] lg:text-[3rem] leading-tight font-normal mb-10">
				Take a look at<br>our projects
			</h2>

			<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
				<?php
				// Project: Gary Neville
				$project_1 = [
					'title'      => 'Refreshing Gary Neville\'s digital presence',
					'tags'       => [ 'Branding', 'Website', 'SEO' ],
					'year'       => '2023',
					'url'        => '/work/gary-neville/',
					'image_alt'  => 'Gary Neville website on laptop and phone',
				];
				?>
				<a href="<?php echo esc_url( $project_1['url'] ); ?>"
				   class="group block relative overflow-hidden rounded-2xl lg:rounded-3xl bg-gray-100 project-card">
					<!-- Image placeholder — would use project thumbnail -->
					<div class="aspect-[4/3] bg-gray-200 project-card__image overflow-hidden flex items-center justify-center text-6xl">
						📱
					</div>
					<div class="p-6 lg:p-8">
						<div class="flex flex-wrap gap-2 mb-3">
							<?php foreach ( $project_1['tags'] as $tag ) : ?>
								<span class="text-xs font-light bg-gray-50 rounded-md py-0.5 px-2"><?php echo esc_html( $tag ); ?></span>
							<?php endforeach; ?>
						</div>
						<h3 class="text-2xl lg:text-[2rem] leading-tight font-normal mb-2">
							<?php echo esc_html( $project_1['title'] ); ?>
						</h3>
						<span class="text-sm font-light text-[#999a9a]"><?php echo esc_html( $project_1['year'] ); ?></span>
					</div>
				</a>

				<?php
				// Project: Sketch Studios
				$project_2 = [
					'title'      => 'A workplace consultancy creating inspiring environments',
					'tags'       => [ 'Website', 'SEO', 'Brand Repositioning' ],
					'year'       => '2024',
					'url'        => '/work/sketch-studios/',
				];
				?>
				<a href="<?php echo esc_url( $project_2['url'] ); ?>"
				   class="group block relative overflow-hidden rounded-2xl lg:rounded-3xl bg-gray-100 project-card">
					<div class="aspect-[4/3] bg-gray-200 project-card__image overflow-hidden flex items-center justify-center text-6xl">
						🖥️
					</div>
					<div class="p-6 lg:p-8">
						<div class="flex flex-wrap gap-2 mb-3">
							<?php foreach ( $project_2['tags'] as $tag ) : ?>
								<span class="text-xs font-light bg-gray-50 rounded-md py-0.5 px-2"><?php echo esc_html( $tag ); ?></span>
							<?php endforeach; ?>
						</div>
						<h3 class="text-2xl lg:text-[2rem] leading-tight font-normal mb-2">
							<?php echo esc_html( $project_2['title'] ); ?>
						</h3>
						<span class="text-sm font-light text-[#999a9a]"><?php echo esc_html( $project_2['year'] ); ?></span>
					</div>
				</a>
			</div>
		</div>
	</section>

	<!-- ================================================================ -->
	<!-- CTA BREAK #1 — "Like what you see?"                               -->
	<!-- ================================================================ -->
	<section class="py-12 lg:py-20" aria-labelledby="cta-heading-1">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 text-center">
			<h2 id="cta-heading-1" class="text-[2.5rem] lg:text-[4rem] leading-none font-normal mb-8">
				Like what<br>you see?
			</h2>
			<a href="/project-planner/" class="inline-flex items-center justify-center bg-[#d0ff71] text-black text-lg font-normal py-3 px-8 rounded-full hover:bg-opacity-80 transition">
				Start a project
			</a>
		</div>
	</section>

	<!-- ================================================================ -->
	<!-- MORE PROJECTS — Nth Degree + YMU                                  -->
	<!-- ================================================================ -->
	<section class="py-12 lg:py-20 xl:py-24" aria-labelledby="projects-heading-2">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h2 id="projects-heading-2" class="text-[2rem] lg:text-[3rem] leading-tight font-normal mb-10">
				Take a look at<br>our projects
			</h2>

			<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
				<?php
				$projects_more = [
					[
						'title' => 'Furniture designed to the greatest extent',
						'tags'  => [ 'Shopify', 'Website' ],
						'year'  => '2024',
						'url'   => '/work/nth-degree/',
						'emoji' => '🪑',
					],
					[
						'title' => 'Redefining a leading global talent group',
						'tags'  => [ 'Website' ],
						'year'  => '2024',
						'url'   => '/work/ymu/',
						'emoji' => '🌍',
					],
				];
				foreach ( $projects_more as $proj ) :
					?>
					<a href="<?php echo esc_url( $proj['url'] ); ?>"
					   class="group block relative overflow-hidden rounded-2xl lg:rounded-3xl bg-gray-100 project-card">
						<div class="aspect-[4/3] bg-gray-200 project-card__image overflow-hidden flex items-center justify-center text-6xl">
							<?php echo esc_html( $proj['emoji'] ); ?>
						</div>
						<div class="p-6 lg:p-8">
							<div class="flex flex-wrap gap-2 mb-3">
								<?php foreach ( $proj['tags'] as $tag ) : ?>
									<span class="text-xs font-light bg-gray-50 rounded-md py-0.5 px-2"><?php echo esc_html( $tag ); ?></span>
								<?php endforeach; ?>
							</div>
							<h3 class="text-2xl lg:text-[2rem] leading-tight font-normal mb-2">
								<?php echo esc_html( $proj['title'] ); ?>
							</h3>
							<span class="text-sm font-light text-[#999a9a]"><?php echo esc_html( $proj['year'] ); ?></span>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- CTA Break #2 -->
	<section class="py-12 lg:py-20" aria-labelledby="cta-heading-2">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 text-center">
			<h2 id="cta-heading-2" class="text-[2.5rem] lg:text-[4rem] leading-none font-normal mb-8">
				Like what<br>you see?
			</h2>
			<a href="/project-planner/" class="inline-flex items-center justify-center bg-[#d0ff71] text-black text-lg font-normal py-3 px-8 rounded-full hover:bg-opacity-80 transition">
				Start a project
			</a>
		</div>
	</section>

	<!-- ================================================================ -->
	<!-- SERVICES — "How we take your business to the next level"          -->
	<!-- ================================================================ -->
	<section class="py-12 lg:py-20 xl:py-24" aria-labelledby="services-heading">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h2 id="services-heading" class="text-[2rem] lg:text-[3rem] leading-tight font-normal mb-10 max-w-[700px]">
				How we take your business to the next level
			</h2>

			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 lg:gap-6">
				<?php
				$services = [
					[ 'title' => 'Web Design',      'desc' => 'Deliver your business to a wider audience', 'url' => '/web-design/', 'emoji' => '🌐' ],
					[ 'title' => 'Craft CMS',        'desc' => 'The most reliable way to build a website', 'url' => '/craft-cms/', 'emoji' => '⚙️' ],
					[ 'title' => 'Branding',         'desc' => 'Creating brands you\'re proud of', 'url' => '/branding/', 'emoji' => '🎨' ],
					[ 'title' => 'SEO',              'desc' => 'Get your brand seen online', 'url' => '/search-engine-optimisation-manchester/', 'emoji' => '📈' ],
					[ 'title' => 'Shopify',          'desc' => 'Custom Shopify store in 4 weeks', 'url' => '/shopify/', 'emoji' => '🛒' ],
				];
				foreach ( $services as $svc ) :
					?>
					<a href="<?php echo esc_url( $svc['url'] ); ?>"
					   class="group block bg-[#111] text-white rounded-2xl lg:rounded-3xl p-5 lg:p-6 hover:bg-[#d0ff71] hover:text-black transition">
						<div class="text-3xl mb-4"><?php echo esc_html( $svc['emoji'] ); ?></div>
						<h3 class="text-xl lg:text-2xl font-normal mb-2"><?php echo esc_html( $svc['title'] ); ?></h3>
						<p class="text-sm font-light opacity-70 group-hover:opacity-100"><?php echo esc_html( $svc['desc'] ); ?></p>
					</a>
				<?php endforeach; ?>
			</div>

			<!-- View all services link -->
			<div class="mt-8">
				<a href="/services/" class="inline-flex items-center gap-2 text-lg font-normal hover:text-[#d0ff71] transition">
					View all Services &rarr;
				</a>
			</div>
		</div>
	</section>

	<!-- ================================================================ -->
	<!-- ABOUT — Agency intro, team stats, reviews                         -->
	<!-- ================================================================ -->
	<section class="py-12 lg:py-20 xl:py-24" aria-labelledby="about-heading">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h2 id="about-heading" class="text-[2rem] lg:text-[3rem] leading-tight font-normal mb-10 max-w-[800px]">
				A web design agency in Manchester that cares about you and your brand, no matter the size or what industry your business is in.
			</h2>

			<!-- About cards grid -->
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-12">
				<?php
				$about_cards = [
					[ 'title' => 'About Us',  'url' => '/about/',       'emoji' => '🏢' ],
					[ 'title' => 'Meet the Team', 'url' => '/meet-the-team/', 'emoji' => '👥' ],
					[ 'title' => 'Culture',   'url' => '/culture/',     'emoji' => '🌈' ],
					[ 'title' => 'Testimonials', 'url' => '/testimonials/', 'emoji' => '💬' ],
				];
				foreach ( $about_cards as $card ) :
					?>
					<a href="<?php echo esc_url( $card['url'] ); ?>"
					   class="group block bg-gray-50 rounded-2xl lg:rounded-3xl p-6 lg:p-8 hover:bg-[#d0ff71] transition">
						<div class="text-3xl mb-4"><?php echo esc_html( $card['emoji'] ); ?></div>
						<h3 class="text-xl font-normal"><?php echo esc_html( $card['title'] ); ?></h3>
					</a>
				<?php endforeach; ?>
			</div>

			<!-- Google reviews badge + map placeholder -->
			<div class="flex flex-wrap items-center gap-6 mb-10 p-6 lg:p-10 bg-gray-50 rounded-2xl lg:rounded-3xl">
				<div class="flex-shrink-0 bg-white rounded-xl p-4 shadow-sm">
					<div class="flex items-center gap-3">
						<span class="text-4xl">⭐</span>
						<div>
							<div class="text-2xl font-normal">5.0</div>
							<div class="text-sm font-light text-[#999a9a]">Google Reviews</div>
						</div>
					</div>
				</div>
				<div class="flex-shrink-0">
					<a href="https://www.google.com/maps/place/MadeByShape/@53.5302612,-2.5068987,17z" target="_blank" rel="noopener"
					   class="text-base font-light underline hover:text-[#d0ff71] transition">
						📍 View us on Google Maps
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- ================================================================ -->
	<!-- BLOG GRID                                                         -->
	<!-- ================================================================ -->
	<section class="py-12 lg:py-20 xl:py-24" aria-labelledby="blog-heading">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h2 id="blog-heading" class="text-[2rem] lg:text-[3rem] leading-tight font-normal mb-10">
				The latest<br>from our<br>design studio
			</h2>

			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
				<?php
				$blog_posts = [
					[ 'title' => 'Why did Rise at Seven choose MadeByShape?',      'read' => '2 min read', 'url' => '/web-design-blog/why-did-rise-at-seven-choose-madebyshape/' ],
					[ 'title' => 'Our Culture, Our Value & Our Studio',             'read' => '6 min read', 'url' => '/web-design-blog/our-culture-our-value-our-studio/' ],
					[ 'title' => 'Why haven\'t we upscaled our web design agency?', 'read' => '10 min read', 'url' => '/web-design-blog/why-havent-we-upscaled-our-web-design-agency/' ],
					[ 'title' => 'Why our studio outside of Manchester works',       'read' => '4 min read', 'url' => '/web-design-blog/why-our-studio-just-outside-of-manchester-works-for-us/' ],
					[ 'title' => 'Types of clients we want to work with',           'read' => '6 min read', 'url' => '/web-design-blog/types-of-clients-we-want-to-work-with/' ],
					[ 'title' => 'Why I chose to work for a small design agency',   'read' => '4 min read', 'url' => '/web-design-blog/why-i-chose-to-work-for-a-small-design-agency/' ],
				];
				foreach ( $blog_posts as $post ) :
					?>
					<a href="<?php echo esc_url( $post['url'] ); ?>"
					   class="group block bg-gray-50 rounded-2xl lg:rounded-3xl overflow-hidden hover:bg-[#d0ff71] transition">
						<div class="aspect-[4/3] bg-gray-200 flex items-center justify-center text-4xl">
							📝
						</div>
						<div class="p-5 lg:p-6">
							<h3 class="text-lg lg:text-xl font-normal mb-2">
								<?php echo esc_html( $post['title'] ); ?>
							</h3>
							<span class="text-sm font-light text-[#999a9a]"><?php echo esc_html( $post['read'] ); ?></span>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ================================================================ -->
	<!-- AI TESTIMONIAL — "See what AI has to say about us"                -->
	<!-- ================================================================ -->
	<section class="py-12 lg:py-20" aria-labelledby="ai-heading">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">
			<h1 id="ai-heading" class="text-[3rem] lg:text-[4.5rem] leading-none font-normal mb-10">
				See what AI has<br>to say about us
			</h1>

			<!-- AI platform pills -->
			<div class="flex flex-wrap gap-3 mb-10">
				<?php
				$ai_platforms = [
					[ 'name' => 'ChatGPT', 'icon' => '🤖' ],
					[ 'name' => 'Claude',  'icon' => '🧠' ],
					[ 'name' => 'Google',  'icon' => '🔍' ],
					[ 'name' => 'Grok',    'icon' => '⚡' ],
				];
				foreach ( $ai_platforms as $platform ) :
					?>
					<span class="inline-flex items-center gap-2 bg-[#d0ff71] text-black rounded-full pl-3 pr-5 py-1.5 text-base font-normal">
						<?php echo esc_html( $platform['icon'] . ' ' . $platform['name'] ); ?>
					</span>
				<?php endforeach; ?>
			</div>

			<!-- AI quote (static placeholder for the tabbed carousel content) -->
			<blockquote class="max-w-[900px] text-[1.5rem] lg:text-[2.5rem] leading-tight font-light italic border-l-4 border-[#d0ff71] pl-6 lg:pl-10 py-4">
				"MadeByShape combines exceptional design craft with deep technical expertise. Their approach to branding and web design creates digital experiences that don't just look beautiful — they perform. For businesses seeking a partner who truly understands both form and function, they're an outstanding choice."
			</blockquote>
		</div>
	</section>

	<!-- ================================================================ -->
	<!-- PRE-FOOTER MARQUEE                                                -->
	<!-- ================================================================ -->
	<section class="py-8 lg:py-12 overflow-hidden border-t border-black/5 dark:border-white/10">
		<div class="marquee">
			<div class="marquee__inner text-[3rem] lg:text-[5rem] xl:text-[7rem] leading-none font-normal text-[#010202] dark:text-white">
				<span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span>
			</div>
		</div>
	</section>

<?php get_footer(); ?>