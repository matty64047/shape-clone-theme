<?php
/**
 * MadeByShape Clone — v5: Exact hierarchy from DOM extraction
 *
 * Section order (from Playwright visual hierarchy y-positions):
 *   y=0    Header/nav overlay
 *   y=160  Hero: "A web design and branding agency in Manchester"
 *   y=962  Who we are / About nav cards / Showreel
 *   y=1451 Our Work: projects row 1
 *   y=3310 Our Expertise: service cards  
 *   y=4450 Testimonial + video
 *   y=5086 Sharing the love / About text + team + studio video
 *   y=5642 Marquee "Let's work together"
 *   y=6070 Blog carousel
 *   y=6611 AI testimonial
 *   y=7247 Footer (dark bg #010202)
 *
 * Exact CSS from getComputedStyle():
 *   Section H2: 48px, fw:400, lh:48px
 *   Card H3: 32px, fw:400, lh:36.8px  
 *   Body text: 18px, fw:300, lh:28px
 *   CTA text: 16px, fw:400
 *   Tags: 12px, fw:300
 *   Footer bg: #010202 (dark!), white text
 *
 * @package ShapeClone
 */
get_header();
?>

	<!-- ================================================================ -->
	<!-- HERO — y=160 h=738                                                 -->
	<!-- ================================================================ -->
	<div class="w-full pt-20 pb-10 lg:pt-32 lg:pb-16 xl:pt-40" id="top">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">

			<h1 class="text-[3rem] sm:text-[3.75rem] lg:text-[4.5rem] leading-[1.0] font-normal tracking-[-0.025em] mb-8 max-w-[900px]"
			    data-animate="fade-up">
				A web design and&nbsp;
				<a href="/branding/" class="underline underline-offset-[8px] decoration-1 hover:text-[#a6cc5a] transition-colors">branding agency</a>
				<br>in Manchester
			</h1>

			<p class="text-[1.25rem] sm:text-[1.75rem] lg:text-[2.7rem] leading-[1.15] font-normal max-w-[850px] mb-14"
			   data-animate="fade-up" data-animate-delay="0.15">
				An independent
				<a href="/web-design/" class="underline decoration-1 hover:text-[#a6cc5a] transition-colors">web design</a>
				and
				<a href="/branding/" class="underline decoration-1 hover:text-[#a6cc5a] transition-colors">branding agency</a>
				located in Manchester, UK, working with clients from all around the world.
			</p>

			<div class="flex flex-wrap items-center gap-x-10 gap-y-4 mb-16"
			     data-animate="fade-up" data-animate-delay="0.25">
				<a href="/project-planner/"
				   class="group inline-flex items-center gap-2 text-base lg:text-lg font-light hover:text-[#a6cc5a] transition-colors underline-animated">
					Start a project<span class="opacity-0 group-hover:opacity-100 transition-opacity">→</span>
				</a>
				<a href="/work/"
				   class="group inline-flex items-center gap-2 text-base lg:text-lg font-light hover:text-[#a6cc5a] transition-colors underline-animated">
					View our work
				</a>
			</div>

			<a href="/meet-the-team/"
			   class="group inline-flex items-center gap-4 hover:text-[#a6cc5a] transition-colors"
			   data-animate="fade-up" data-animate-delay="0.35">
				<div class="w-14 h-14 rounded-full bg-gray-300 overflow-hidden flex-shrink-0">
					<img src="https://made-byshape.transforms.svdcdn.com/production/uploads/images/Andy-MadeByShape.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5"
					     alt="Andy" class="w-full h-full object-cover" loading="eager">
				</div>
				<span class="text-base font-light group-hover:text-[#a6cc5a] transition-colors">
					Hear from Andy, Co-Founder of Shape
				</span>
			</a>
		</div>
	</div>

	<!-- ================================================================ -->
	<!-- MAIN CONTENT WRAPPER — y=962                                       -->
	<!-- ================================================================ -->
	<div class="w-full">

		<!-- ============================================================ -->
		<!-- WHO WE ARE + NAV CARDS — y=962                                 -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 pt-16 lg:pt-20">

			<!-- "An independent web design..." -->
			<h2 class="text-[1.75rem] lg:text-[2.7rem] leading-[1.15] font-normal max-w-[850px] mb-10"
			    data-animate="fade-up">
				An independent
				<a href="/web-design/" class="underline decoration-1 hover:text-[#a6cc5a] transition-colors">web&nbsp;design</a>
				and
				<a href="/branding/" class="underline decoration-1 hover:text-[#a6cc5a] transition-colors">branding&nbsp;agency</a>
				in Manchester
			</h2>

			<!-- About nav cards — 4 cards -->
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-6">
				<?php
				$navs = [
					['title'=>'About us','sub'=>'An award winning agency in Manchester','url'=>'/about/','img'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Studio/Shape-April-2022-HR-34.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
					['title'=>'Meet the Team','sub'=>'Putting faces to names','url'=>'/meet-the-team/','img'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Studio/Shape-April-2022-HR-45.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
					['title'=>'Culture','sub'=>'What makes us Shape','url'=>'/culture/','img'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Studio/Shape-April-2022-HR-189.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
					['title'=>'Testimonials','sub'=>'Hear what our clients say','url'=>'/testimonials/','img'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Meeting-Room/Shape-April-2022-HR-231.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
				];
				foreach ($navs as $i => $card):
				?>
				<a href="<?php echo esc_url($card['url']); ?>"
				   class="group block relative overflow-hidden rounded-2xl lg:rounded-3xl aspect-[4/5]"
				   data-animate="fade-up" data-animate-delay="<?php echo $i * 0.1; ?>">
					<img src="<?php echo esc_url($card['img']); ?>" alt="" loading="lazy"
					     class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
					<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
					<div class="absolute bottom-0 left-0 p-6">
						<h3 class="text-xl font-normal text-white leading-tight"><?php echo esc_html($card['title']); ?></h3>
						<p class="text-sm font-light text-white/70 mt-1"><?php echo esc_html($card['sub']); ?></p>
					</div>
				</a>
				<?php endforeach; ?>
			</div>

			<!-- Watch our Showreel -->
			<a href="#" @click.prevent="document.querySelector('[x-data]').__x.$data.playing = true"
			   class="group inline-flex items-center gap-3 text-base font-light hover:text-[#a6cc5a] transition-colors underline-animated pb-16 lg:pb-20"
			   data-animate="fade-up">
				Watch our Showreel <span class="inline-block group-hover:translate-x-1 transition-transform">→</span>
			</a>
		</div>

		<!-- ============================================================ -->
		<!-- OUR WORK — projects row 1 — y=1451                            -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 pb-12 lg:pb-16">
			<h2 class="text-[2.25rem] lg:text-[3rem] leading-[1.0] font-normal mb-10"
			    data-animate="fade-up">
				Take a look at<br>our projects
			</h2>
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
				<?php
				$p1 = [
					['title'=>"Refreshing Gary Neville's digital presence",'tags'=>['Branding','Website','SEO'],'year'=>'2023','url'=>'/work/gary-neville/','video'=>'https://servd-made-byshape.b-cdn.net/production/uploads/videos/gary-neville-thumbnail_2024-06-03-125701_hqui.mp4','poster'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/workImages/Gary-Neville/Gary-Neville-Thumbnail.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
					['title'=>'A workplace consultancy creating inspiring environments','tags'=>['Website','SEO','Brand Repositioning'],'year'=>'2024','url'=>'/work/sketch-studios/','video'=>null,'poster'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/sketch-website.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
				];
				foreach ($p1 as $proj):
				?>
				<a href="<?php echo esc_url($proj['url']); ?>"
				   class="group block overflow-hidden rounded-2xl lg:rounded-3xl bg-gray-100 dark:bg-gray-800"
				   data-animate="fade-up">
					<div class="relative aspect-[4/3] overflow-hidden bg-gray-200">
						<?php if ($proj['video']): ?>
							<video autoplay loop muted playsinline poster="<?php echo esc_url($proj['poster']); ?>"
							       class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
								<source src="<?php echo esc_url($proj['video']); ?>" type="video/mp4">
							</video>
						<?php else: ?>
							<img src="<?php echo esc_url($proj['poster']); ?>" alt="" loading="lazy"
							     class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
						<?php endif; ?>
					</div>
					<div class="p-6 lg:p-8">
						<div class="flex flex-wrap gap-2 mb-4">
							<?php foreach ($proj['tags'] as $tag): ?>
								<span class="text-xs font-light bg-gray-50 dark:bg-gray-700 rounded-md py-1 px-2.5"><?php echo esc_html($tag); ?></span>
							<?php endforeach; ?>
						</div>
						<h3 class="text-2xl lg:text-[2rem] leading-[1.15] font-normal mb-4"><?php echo esc_html($proj['title']); ?></h3>
						<div class="flex items-center justify-between">
							<span class="text-sm font-light text-[#999a9a]"><?php echo esc_html($proj['year']); ?></span>
							<span class="text-sm font-light opacity-0 group-hover:opacity-100 transition-opacity">View project →</span>
						</div>
					</div>
				</a>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- CTA Break -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 py-12 lg:py-16 text-center" data-animate="fade-up">
			<h2 class="text-[3rem] leading-[1.0] font-normal mb-8">Like what<br>you see?</h2>
			<a href="/project-planner/"
			   class="group inline-flex items-center gap-2 text-base lg:text-lg font-light hover:text-[#a6cc5a] transition-colors underline-animated">
				Start a project<span class="opacity-0 group-hover:opacity-100 transition-opacity">→</span>
			</a>
		</div>

		<!-- ============================================================ -->
		<!-- PROJECTS ROW 2                                                -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 pb-12 lg:pb-16">
			<h2 class="text-[2.25rem] lg:text-[3rem] leading-[1.0] font-normal mb-10"
			    data-animate="fade-up">
				Take a look at<br>our projects
			</h2>
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
				<?php
				$p2 = [
					['title'=>'Furniture designed to the greatest extent','tags'=>['Shopify','Website'],'year'=>'2024','url'=>'/work/nth-degree/','video'=>null,'poster'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/workImages/Nth-Degree/Camera_6_Sun_loungers_Dining_set_Final_300dpi.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
					['title'=>'Redefining a leading global talent group','tags'=>['Website'],'year'=>'2024','url'=>'/work/ymu/','video'=>'https://servd-made-byshape.b-cdn.net/production/uploads/videos/ymu-thumbnail.mp4','poster'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/workImages/YMU/YMU-thumbnail.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
				];
				foreach ($p2 as $proj):
				?>
				<a href="<?php echo esc_url($proj['url']); ?>"
				   class="group block overflow-hidden rounded-2xl lg:rounded-3xl bg-gray-100 dark:bg-gray-800"
				   data-animate="fade-up">
					<div class="relative aspect-[4/3] overflow-hidden bg-gray-200">
						<?php if ($proj['video']): ?>
							<video autoplay loop muted playsinline poster="<?php echo esc_url($proj['poster']); ?>"
							       class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
								<source src="<?php echo esc_url($proj['video']); ?>" type="video/mp4">
							</video>
						<?php else: ?>
							<img src="<?php echo esc_url($proj['poster']); ?>" alt="" loading="lazy"
							     class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
						<?php endif; ?>
					</div>
					<div class="p-6 lg:p-8">
						<div class="flex flex-wrap gap-2 mb-4">
							<?php foreach ($proj['tags'] as $tag): ?>
								<span class="text-xs font-light bg-gray-50 dark:bg-gray-700 rounded-md py-1 px-2.5"><?php echo esc_html($tag); ?></span>
							<?php endforeach; ?>
						</div>
						<h3 class="text-2xl lg:text-[2rem] leading-[1.15] font-normal mb-4"><?php echo esc_html($proj['title']); ?></h3>
						<div class="flex items-center justify-between">
							<span class="text-sm font-light text-[#999a9a]"><?php echo esc_html($proj['year']); ?></span>
							<span class="text-sm font-light opacity-0 group-hover:opacity-100 transition-opacity">View project →</span>
						</div>
					</div>
				</a>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- CTA Break -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 py-12 lg:py-16 text-center" data-animate="fade-up">
			<h2 class="text-[3rem] leading-[1.0] font-normal mb-8">Like what<br>you see?</h2>
			<a href="/project-planner/"
			   class="group inline-flex items-center gap-2 text-base lg:text-lg font-light hover:text-[#a6cc5a] transition-colors underline-animated">
				Start a project<span class="opacity-0 group-hover:opacity-100 transition-opacity">→</span>
			</a>
		</div>

		<!-- ============================================================ -->
		<!-- OUR EXPERTISE — services — y=3310, cards are flat links        -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 pb-12 lg:pb-16">
			<h2 class="text-[2.25rem] lg:text-[3rem] leading-[1.0] font-normal mb-10"
			    data-animate="fade-up">
				How we take your business to the next level
			</h2>

			<div class="space-y-0 divide-y divide-black/5 dark:divide-white/10 border-y border-black/5 dark:border-white/10">
				<?php
				$svcs = [
					['title'=>'Brand Identity','desc'=>"Creating brands you're proud of",'url'=>'/branding/'],
					['title'=>'Websites','desc'=>'Deliver your business to a wider audience','url'=>'/web-design/'],
					['title'=>'SEO','desc'=>'Get your brand seen online','url'=>'/search-engine-optimisation-manchester/'],
					['title'=>'Craft CMS','desc'=>'The most reliable way to build a website','url'=>'/craft-cms/'],
					['title'=>'Shopify','desc'=>'Custom Shopify store in 4 weeks','url'=>'/shopify/'],
				];
				foreach ($svcs as $i => $svc):
				?>
				<a href="<?php echo esc_url($svc['url']); ?>"
				   class="group flex items-center justify-between py-6 lg:py-8 hover:bg-gray-50 dark:hover:bg-gray-900 px-4 -mx-4 rounded-xl transition-colors"
				   data-animate="fade-up" data-animate-delay="<?php echo $i * 0.08; ?>">
					<div>
						<h3 class="text-2xl lg:text-[2rem] font-normal mb-1 group-hover:text-[#a6cc5a] transition-colors">
							<?php echo esc_html($svc['title']); ?>
						</h3>
						<p class="text-lg font-light text-[#999a9a]">
							<?php echo esc_html($svc['desc']); ?>
						</p>
					</div>
					<span class="text-2xl font-light text-[#999a9a] group-hover:text-[#a6cc5a] transition-colors flex-shrink-0 ml-8">→</span>
				</a>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- ============================================================ -->
		<!-- TESTIMONIAL + STUDIO — y=4450 / y=5086                         -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 pb-12 lg:pb-16">

			<!-- Testimonial quote -->
			<div class="py-8 lg:py-12" data-animate="fade-up">
				<blockquote class="max-w-[800px] text-[1.5rem] lg:text-[2.5rem] leading-[1.2] font-normal mb-4">
					"Shape created something better than I ever could have imagined"
				</blockquote>
				<p class="text-lg font-light text-[#999a9a]">
					<span class="font-normal" style="color:rgb(1,2,2)">Stoneletters</span> — Testimonial
				</p>
			</div>

			<!-- Sharing the love — about/blurb -->
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 py-8 lg:py-12 border-t border-black/5 dark:border-white/10">
				<div data-animate="fade-up">
					<h2 class="text-[2.25rem] lg:text-[3rem] leading-[1.0] font-normal mb-6">
						Sharing<br>the love
					</h2>
				</div>
				<div data-animate="fade-up" data-animate-delay="0.1">
					<h3 class="text-[1.75rem] lg:text-[2.5rem] leading-[1.15] font-normal mb-6">
						A web design agency in Manchester that cares about you and your brand
					</h3>
					<p class="text-lg font-light leading-[1.55] text-[#343535] mb-6" style="font-weight:300;line-height:28px">
						Our content management system of choice is Craft CMS rather than WordPress, allowing us to build bespoke websites without bloated code. We're a small team of designers and developers who genuinely care about the work we produce.
					</p>
					<div class="flex flex-wrap items-center gap-6 mt-8">
						<div class="flex -space-x-3">
							<?php
							$faces = [
								'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/Individuals-Black-Wall/Shape-April-2022-HR-186.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
								'https://made-byshape.transforms.svdcdn.com/production/uploads/images/Ella-MadeByShape.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
								'https://made-byshape.transforms.svdcdn.com/production/uploads/images/Hannah-Wessel-Profile-image.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
							];
							foreach ($faces as $f):
							?>
							<div class="w-12 h-12 lg:w-14 lg:h-14 rounded-full border-2 border-white overflow-hidden flex-shrink-0">
								<img src="<?php echo esc_url($f); ?>" alt="" class="w-full h-full object-cover" loading="lazy">
							</div>
							<?php endforeach; ?>
						</div>
						<span class="text-base font-light">A growing team of 13+</span>
						<div class="ml-auto">
							<img src="https://made-byshape.transforms.svdcdn.com/production/uploads/images/google-reviews-badge.png?w=200&q=95&auto=format&fit=crop"
							     alt="Google Reviews" class="h-12 lg:h-14 w-auto" loading="lazy">
						</div>
					</div>
				</div>
			</div>

			<!-- Studio video -->
			<div class="relative aspect-[16/9] rounded-2xl lg:rounded-3xl overflow-hidden bg-gray-200 mt-8"
			     x-data="{ playing: false }" data-animate="fade-up">
				<div x-show="!playing" class="absolute inset-0 flex items-center justify-center cursor-pointer" @click="playing = true">
					<img src="https://made-byshape.transforms.svdcdn.com/production/uploads/images/MadeByShape-Studio/shape-office.jpg?w=1200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5"
					     alt="" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
					<div class="relative z-10 w-20 h-20 lg:w-24 lg:h-24 rounded-full bg-[#a6cc5a] flex items-center justify-center hover:scale-110 transition-transform">
						<svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24"><polygon points="5,3 19,12 5,21"/></svg>
					</div>
				</div>
				<iframe x-show="playing" x-transition.opacity
				        src="https://player.vimeo.com/video/922839949?autoplay=1&loop=1&autopause=0&mute=1&controls=0"
				        class="absolute inset-0 w-full h-full" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
			</div>
		</div>

		<!-- ============================================================ -->
		<!-- MARQUEE — y=5642                                               -->
		<!-- ============================================================ -->
		<div class="py-8 lg:py-12 overflow-hidden border-t border-black/5 dark:border-white/10">
			<div class="marquee">
				<div class="marquee__inner text-[3rem] lg:text-[5.5rem] leading-none font-normal">
					<span>Let's work together.&nbsp;</span><span>Let's work together.&nbsp;</span>
					<span>Let's work together.&nbsp;</span><span>Let's work together.&nbsp;</span>
					<span>Let's work together.&nbsp;</span><span>Let's work together.&nbsp;</span>
				</div>
			</div>
		</div>

		<!-- ============================================================ -->
		<!-- BLOG — y=6070, h2:48px fw:400 lh:48px                          -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 py-12 lg:py-16">
			<div class="flex items-center justify-between mb-10">
				<h2 class="text-[2.25rem] lg:text-[3rem] leading-[1.0] font-normal" data-animate="fade-up">
					The latest<br>from our<br>design studio
				</h2>
				<a href="/web-design-blog/"
				   class="hidden lg:inline-flex items-center gap-2 text-base font-light hover:text-[#a6cc5a] transition-colors underline-animated"
				   data-animate="fade-up">
					View the blog →
				</a>
			</div>
			<div class="swiper blog-swiper !overflow-visible" data-animate="fade-up">
				<div class="swiper-wrapper">
					<?php
					$blogs = [
						['title'=>"Why did Rise at Seven choose MadeByShape?",'read'=>'2 min read','url'=>'/web-design-blog/why-did-rise-at-seven-choose-madebyshape/'],
						['title'=>'Our Culture, Our Value & Our Studio','read'=>'6 min read','url'=>'/web-design-blog/our-culture-our-value-our-studio/'],
						['title'=>"Why haven't we upscaled our web design agency?",'read'=>'10 min read','url'=>'/web-design-blog/why-havent-we-upscaled-our-web-design-agency/'],
						['title'=>'Why our studio outside of Manchester works for us','read'=>'4 min read','url'=>'/web-design-blog/why-our-studio-just-outside-of-manchester-works-for-us/'],
						['title'=>'Types of clients we want to work with','read'=>'6 min read','url'=>'/web-design-blog/types-of-clients-we-want-to-work-with/'],
						['title'=>'Why I chose to work for a small design agency','read'=>'4 min read','url'=>'/web-design-blog/why-i-chose-to-work-for-a-small-design-agency/'],
					];
					foreach ($blogs as $post):
					?>
					<div class="swiper-slide !h-auto">
						<a href="<?php echo esc_url($post['url']); ?>"
						   class="group block bg-gray-50 dark:bg-gray-800 rounded-2xl lg:rounded-3xl overflow-hidden hover:bg-[#a6cc5a] transition-colors duration-500">
							<div class="aspect-[4/3] bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-600 flex items-center justify-center">
								<span class="text-7xl opacity-20 group-hover:opacity-30 transition-opacity">📝</span>
							</div>
							<div class="p-5 lg:p-6">
								<h3 class="text-lg lg:text-xl font-normal mb-3 group-hover:text-black transition-colors duration-500">
									<?php echo esc_html($post['title']); ?>
								</h3>
								<span class="text-sm font-light text-[#999a9a] group-hover:text-black/60 transition-colors duration-500">
									<?php echo esc_html($post['read']); ?>
								</span>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<a href="/web-design-blog/"
			   class="lg:hidden inline-flex items-center gap-2 text-base font-light hover:text-[#a6cc5a] transition-colors mt-6"
			   data-animate="fade-up">
				View the blog →
			</a>
		</div>

	</div>

	<!-- ================================================================ -->
	<!-- AI TESTIMONIAL — y=6611, H1:72px fw:400 lh:64.8px                -->
	<!-- ================================================================ -->
	<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 py-16 lg:py-20 border-t border-black/5 dark:border-white/10">
		<p class="text-lg font-light text-[#999a9a] mb-4" data-animate="fade-up">
			Don't believe the hype?
		</p>
		<h2 class="text-[3rem] lg:text-[4.5rem] leading-[0.9] font-normal mb-10" data-animate="fade-up">
			See what AI has<br>to say about us
		</h2>
		<div class="flex flex-wrap gap-3 mb-8" data-animate="fade-up" data-animate-delay="0.1">
			<span class="inline-flex items-center gap-2 bg-[#a6cc5a] text-black rounded-full pl-4 pr-6 py-2 text-base font-normal">OpenAI</span>
			<span class="inline-flex items-center gap-2 bg-[#a6cc5a] text-black rounded-full pl-4 pr-6 py-2 text-base font-normal">Claude</span>
			<span class="inline-flex items-center gap-2 bg-[#a6cc5a] text-black rounded-full pl-4 pr-6 py-2 text-base font-normal">Google</span>
			<span class="inline-flex items-center gap-2 bg-[#a6cc5a] text-black rounded-full pl-4 pr-6 py-2 text-base font-normal">Grok</span>
		</div>
		<blockquote class="max-w-[900px] text-[1.5rem] lg:text-[2rem] leading-tight font-light italic border-l-4 border-[#a6cc5a] pl-6 lg:pl-10 py-4"
		           data-animate="fade-up" data-animate-delay="0.2">
			"MadeByShape combines exceptional design craft with deep technical expertise. Their approach to branding and web design creates digital experiences that don't just look beautiful — they perform."
		</blockquote>
	</div>

	<!-- ================================================================ -->
	<!-- MARQUEE pre-footer                                                -->
	<!-- ================================================================ -->
	<div class="py-8 lg:py-12 overflow-hidden border-t border-black/5 dark:border-white/10">
		<div class="marquee">
			<div class="marquee__inner text-[3rem] lg:text-[5.5rem] leading-none font-normal">
				<span>Let's work together.&nbsp;</span><span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span><span>Let's work together.&nbsp;</span>
				<span>Let's work together.&nbsp;</span><span>Let's work together.&nbsp;</span>
			</div>
		</div>
	</div>

<?php get_footer(); ?>