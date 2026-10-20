<?php
/**
 * MadeByShape Clone — v3: exact DOM structure match
 *
 * Body structure (from Playwright DOM extraction):
 *   [4] div.fixed — Header/nav
 *   [6] div.pt-20 — Hero (962px)
 *   [7] div.w-full — Main content (5649px): projects, services, about, blog, testimonials
 *   [8] div — AI testimonials (636px)
 *   [9] footer — Footer (800px)
 *
 * @package ShapeClone
 */
get_header();
?>

	<!-- ================================================================ -->
	<!-- HERO — matches [6] div w-full pt-20 pb-10 lg:pt-32 lg:pb-16 xl:pt-40 -->
	<!-- ================================================================ -->
	<div class="w-full pt-20 pb-10 lg:pt-32 lg:pb-16 xl:pt-40" id="top">
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10">

			<!-- H1: split-text animated heading -->
			<h1 class="text-[3.5rem] sm:text-[4.5rem] lg:text-[5.5rem] xl:text-[6.5rem] leading-none font-normal tracking-tight mb-8 max-w-[1000px] text-[#010202] dark:text-white"
			    data-animate="fade-up"
			    style="font-size: clamp(3.5rem, 10vw, 6.5rem);">
				A web design and&nbsp;
				<a href="/branding/" class="underline underline-offset-[8px] decoration-1 hover:text-[#a6cc5a] transition-colors duration-500">
					branding agency
				</a><br>in Manchester
			</h1>

			<!-- Intro paragraph — actually an h2 in the source (43.2px / 2.7rem) -->
			<p class="text-[1.4rem] sm:text-[1.8rem] lg:text-[2.2rem] xl:text-[2.7rem] leading-[1.15] font-normal max-w-[850px] mb-14 text-[#010202] dark:text-white"
			   data-animate="fade-up" data-animate-delay="0.15">
				An independent
				<a href="/web-design/" class="underline decoration-1 hover:text-[#a6cc5a] transition-colors duration-500">web&nbsp;design</a>
				and
				<a href="/branding/" class="underline decoration-1 hover:text-[#a6cc5a] transition-colors duration-500">branding&nbsp;agency</a>
				located in Manchester, UK, working with clients from all around the world.
			</p>

			<!-- CTAs — text-only links with animated underline (NOT pill buttons) -->
			<div class="flex flex-wrap items-center gap-x-10 gap-y-4 mb-16" data-animate="fade-up" data-animate-delay="0.25">
				<a href="/project-planner/"
				   class="group inline-flex items-center gap-2 text-lg lg:text-xl font-normal text-[#010202] dark:text-white hover:text-[#a6cc5a] transition-colors duration-300 underline-animated">
					Start a project
					<span class="inline-block opacity-0 group-hover:opacity-100 transition-opacity">→</span>
				</a>
				<a href="/work/"
				   class="group inline-flex items-center gap-2 text-lg lg:text-xl font-normal text-[#010202] dark:text-white hover:text-[#a6cc5a] transition-colors duration-300 underline-animated">
					View our work
					<span class="inline-block opacity-0 group-hover:opacity-100 transition-opacity">→</span>
				</a>
			</div>

			<!-- Founder avatar CTA -->
			<a href="/meet-the-team/"
			   class="group inline-flex items-center gap-4 hover:text-[#a6cc5a] transition-colors duration-300"
			   data-animate="fade-up" data-animate-delay="0.35">
				<div class="w-14 h-14 rounded-full bg-gray-300 flex-shrink-0 overflow-hidden">
					<img src="https://made-byshape.transforms.svdcdn.com/production/uploads/images/Andy-MadeByShape.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5"
					     alt="Andy" class="w-full h-full object-cover" loading="eager"
					     onerror="this.style.display='none';this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center text-2xl\'>👤</div>'">
				</div>
				<span class="text-base font-light text-[#010202] dark:text-white group-hover:text-[#a6cc5a] transition-colors duration-300">
					Hear from Andy, Co-Founder of Shape
				</span>
			</a>

		</div>
	</div>

	<!-- ================================================================ -->
	<!-- MAIN CONTENT — matches [7] div.w-full (5649px)                    -->
	<!-- ================================================================ -->
	<div class="w-full">

		<!-- Intro h2 -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 py-12 lg:py-20">
			<h2 class="text-[1.8rem] lg:text-[2.7rem] leading-[1.15] font-normal max-w-[850px] text-[#010202] dark:text-white"
			    data-animate="fade-up">
				An independent
				<a href="/web-design/" class="underline decoration-1 hover:text-[#a6cc5a] transition-colors duration-500">web&nbsp;design</a>
				and
				<a href="/branding/" class="underline decoration-1 hover:text-[#a6cc5a] transition-colors duration-500">branding&nbsp;agency</a>
				in Manchester
			</h2>
		</div>

		<!-- ============================================================ -->
		<!-- PROJECTS ROW 1                                                -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 pb-16 lg:pb-24">
			<h2 class="text-[2.5rem] lg:text-[3.5rem] leading-tight font-normal mb-10 text-[#010202] dark:text-white"
			    data-animate="fade-up">
				Take a look at<br>our projects
			</h2>

			<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
				<?php
				$p1 = [
					[ 'title' => "Refreshing Gary Neville's digital presence", 'tags' => ['Branding','Website','SEO'], 'year' => '2023', 'url' => '/work/gary-neville/', 'video' => 'https://servd-made-byshape.b-cdn.net/production/uploads/videos/gary-neville-thumbnail_2024-06-03-125701_hqui.mp4', 'poster' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/workImages/Gary-Neville/Gary-Neville-Thumbnail.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5' ],
					[ 'title' => 'A workplace consultancy creating inspiring environments', 'tags' => ['Website','SEO','Brand Repositioning'], 'year' => '2024', 'url' => '/work/sketch-studios/', 'video' => null, 'poster' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/sketch-website.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5' ],
				];
				foreach ($p1 as $proj):
				?>
				<a href="<?php echo esc_url($proj['url']); ?>"
				   class="group block relative overflow-hidden rounded-2xl lg:rounded-3xl bg-gray-100 dark:bg-gray-800"
				   data-animate="fade-up">
					<div class="relative aspect-[4/3] overflow-hidden bg-gray-200 dark:bg-gray-700">
						<?php if ($proj['video']): ?>
							<video autoplay loop muted playsinline
							       poster="<?php echo esc_url($proj['poster']); ?>"
							       class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
								<source src="<?php echo esc_url($proj['video']); ?>" type="video/mp4">
							</video>
						<?php else: ?>
							<img src="<?php echo esc_url($proj['poster']); ?>"
							     alt="" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
							     loading="lazy">
						<?php endif; ?>
					</div>
					<div class="p-6 lg:p-8">
						<div class="flex flex-wrap gap-2 mb-4">
							<?php foreach ($proj['tags'] as $tag): ?>
								<span class="text-xs font-light bg-gray-50 dark:bg-gray-700 rounded-md py-1 px-2.5"><?php echo esc_html($tag); ?></span>
							<?php endforeach; ?>
						</div>
						<h3 class="text-xl lg:text-[2rem] leading-[1.15] font-normal mb-4"><?php echo esc_html($proj['title']); ?></h3>
						<div class="flex items-center justify-between">
							<span class="text-sm font-light text-[#999a9a]"><?php echo esc_html($proj['year']); ?></span>
							<span class="text-sm font-light opacity-0 group-hover:opacity-100 transition-opacity duration-300">View project →</span>
						</div>
					</div>
				</a>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- ============================================================ -->
		<!-- CTA BREAK #1                                                  -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 py-12 lg:py-20 text-center" data-animate="fade-up">
			<h2 class="text-[3rem] lg:text-[5rem] xl:text-[7rem] leading-none font-normal mb-10">Like what<br>you see?</h2>
			<a href="/project-planner/"
			   class="group inline-flex items-center gap-2 text-lg lg:text-xl font-normal hover:text-[#a6cc5a] transition-colors duration-300 underline-animated">
				Start a project
				<span class="inline-block opacity-0 group-hover:opacity-100 transition-opacity">→</span>
			</a>
		</div>

		<!-- ============================================================ -->
		<!-- PROJECTS ROW 2                                                -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 pb-16 lg:pb-24">
			<h2 class="text-[2.5rem] lg:text-[3.5rem] leading-tight font-normal mb-10" data-animate="fade-up">
				Take a look at<br>our projects
			</h2>
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8">
				<?php
				$p2 = [
					[ 'title' => 'Furniture designed to the greatest extent', 'tags' => ['Shopify','Website'], 'year' => '2024', 'url' => '/work/nth-degree/', 'video' => null, 'poster' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/workImages/Nth-Degree/Camera_6_Sun_loungers_Dining_set_Final_300dpi.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5' ],
					[ 'title' => 'Redefining a leading global talent group', 'tags' => ['Website'], 'year' => '2024', 'url' => '/work/ymu/', 'video' => 'https://servd-made-byshape.b-cdn.net/production/uploads/videos/ymu-thumbnail.mp4', 'poster' => 'https://made-byshape.transforms.svdcdn.com/production/uploads/images/workImages/YMU/YMU-thumbnail.jpg?w=800&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5' ],
				];
				foreach ($p2 as $proj):
				?>
				<a href="<?php echo esc_url($proj['url']); ?>"
				   class="group block relative overflow-hidden rounded-2xl lg:rounded-3xl bg-gray-100 dark:bg-gray-800"
				   data-animate="fade-up">
					<div class="relative aspect-[4/3] overflow-hidden bg-gray-200 dark:bg-gray-700">
						<?php if ($proj['video']): ?>
							<video autoplay loop muted playsinline poster="<?php echo esc_url($proj['poster']); ?>"
							       class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
								<source src="<?php echo esc_url($proj['video']); ?>" type="video/mp4">
							</video>
						<?php else: ?>
							<img src="<?php echo esc_url($proj['poster']); ?>" alt=""
							     class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" loading="lazy">
						<?php endif; ?>
					</div>
					<div class="p-6 lg:p-8">
						<div class="flex flex-wrap gap-2 mb-4">
							<?php foreach ($proj['tags'] as $tag): ?>
								<span class="text-xs font-light bg-gray-50 dark:bg-gray-700 rounded-md py-1 px-2.5"><?php echo esc_html($tag); ?></span>
							<?php endforeach; ?>
						</div>
						<h3 class="text-xl lg:text-[2rem] leading-[1.15] font-normal mb-4"><?php echo esc_html($proj['title']); ?></h3>
						<div class="flex items-center justify-between">
							<span class="text-sm font-light text-[#999a9a]"><?php echo esc_html($proj['year']); ?></span>
							<span class="text-sm font-light opacity-0 group-hover:opacity-100 transition-opacity duration-300">View project →</span>
						</div>
					</div>
				</a>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- CTA Break #2 -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 py-12 lg:py-20 text-center" data-animate="fade-up">
			<h2 class="text-[3rem] lg:text-[5rem] xl:text-[7rem] leading-none font-normal mb-10">Like what<br>you see?</h2>
			<a href="/project-planner/"
			   class="group inline-flex items-center gap-2 text-lg lg:text-xl font-normal hover:text-[#a6cc5a] transition-colors duration-300 underline-animated">
				Start a project
				<span class="inline-block opacity-0 group-hover:opacity-100 transition-opacity">→</span>
			</a>
		</div>

		<!-- ============================================================ -->
		<!-- SERVICES — dark cards                                         -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 pb-16 lg:pb-24">
			<h2 class="text-[2.5rem] lg:text-[3.5rem] leading-tight font-normal mb-10 max-w-[800px] text-[#010202] dark:text-white"
			    data-animate="fade-up">
				How we take your business to the next level
			</h2>

			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 lg:gap-6 mb-10">
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
				   class="group block bg-[#111] dark:bg-gray-800 text-white rounded-2xl lg:rounded-3xl p-6 lg:p-8 hover:bg-[#a6cc5a] hover:text-black transition-colors duration-500"
				   data-animate="fade-up" data-animate-delay="<?php echo $i * 0.08; ?>">
					<div class="w-16 h-16 mb-6 rounded-xl bg-white/10 group-hover:bg-black/10 transition-colors duration-500 flex items-center justify-center">
						<svg class="w-8 h-8" viewBox="0 0 32 32" fill="currentColor"><circle cx="16" cy="16" r="12"/></svg>
					</div>
					<h3 class="text-xl lg:text-2xl font-normal mb-3"><?php echo esc_html($svc['title']); ?></h3>
					<p class="text-sm font-light text-white/60 group-hover:text-black/60 transition-colors duration-500"><?php echo esc_html($svc['desc']); ?></p>
				</a>
				<?php endforeach; ?>
			</div>

			<a href="/services/"
			   class="inline-flex items-center gap-2 text-base font-normal hover:text-[#a6cc5a] transition-colors duration-300 underline-animated"
			   data-animate="fade-up">
				View all Services →</a>
		</div>

		<!-- ============================================================ -->
		<!-- ABOUT — studio cards with real photos, team, reviews, video   -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 pb-16 lg:pb-24">
			<h2 class="text-[1.8rem] lg:text-[2.5rem] leading-[1.2] font-normal mb-10 max-w-[850px] text-[#010202] dark:text-white"
			    data-animate="fade-up">
				A web design agency in Manchester that cares about you and your brand, no matter the size or what industry your business is in.
			</h2>

			<!-- About nav cards -->
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-8">
				<?php
				$abouts = [
					['title'=>'About Us','url'=>'/about/','img'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Studio/Shape-April-2022-HR-34.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
					['title'=>'Meet the Team','url'=>'/meet-the-team/','img'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Studio/Shape-April-2022-HR-45.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
					['title'=>'Culture','url'=>'/culture/','img'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Studio/Shape-April-2022-HR-189.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
					['title'=>'Testimonials','url'=>'/testimonials/','img'=>'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/People-in-Meeting-Room/Shape-April-2022-HR-231.jpg?w=600&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5'],
				];
				foreach ($abouts as $i => $card):
				?>
				<a href="<?php echo esc_url($card['url']); ?>"
				   class="group block relative overflow-hidden rounded-2xl lg:rounded-3xl aspect-[4/5]"
				   data-animate="fade-up" data-animate-delay="<?php echo $i * 0.1; ?>">
					<img src="<?php echo esc_url($card['img']); ?>" alt="" loading="lazy"
					     class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
					<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
					<h3 class="absolute bottom-0 left-0 p-6 lg:p-8 text-xl lg:text-2xl font-normal text-white"><?php echo esc_html($card['title']); ?></h3>
				</a>
				<?php endforeach; ?>
			</div>

			<!-- Team + reviews bar -->
			<div class="flex flex-wrap items-center gap-6 lg:gap-10 py-8 border-t border-black/5 dark:border-white/10" data-animate="fade-up">
				<div class="flex -space-x-3">
					<?php
					$faces = [
						'https://made-byshape.transforms.svdcdn.com/production/uploads/images/India-2022/Individuals-Black-Wall/Shape-April-2022-HR-186.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
						'https://made-byshape.transforms.svdcdn.com/production/uploads/images/Ella-MadeByShape.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
						'https://made-byshape.transforms.svdcdn.com/production/uploads/images/Hannah-Wessel-Profile-image.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
						'https://made-byshape.transforms.svdcdn.com/production/uploads/images/Natasia-MadeByShape.jpg?w=200&h=200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5',
					];
					foreach ($faces as $f):
					?>
					<div class="w-12 h-12 lg:w-14 lg:h-14 rounded-full border-2 border-white dark:border-black overflow-hidden flex-shrink-0">
						<img src="<?php echo esc_url($f); ?>" alt="" class="w-full h-full object-cover" loading="lazy">
					</div>
					<?php endforeach; ?>
				</div>
				<span class="text-base font-light text-[#010202] dark:text-white">A growing team of 13+</span>
				<div class="ml-auto">
					<img src="https://made-byshape.transforms.svdcdn.com/production/uploads/images/google-reviews-badge.png?w=200&q=95&auto=format&fit=crop"
					     alt="Google Reviews" class="h-12 lg:h-14 w-auto" loading="lazy">
				</div>
			</div>

			<!-- Studio video -->
			<div class="relative aspect-[16/9] rounded-2xl lg:rounded-3xl overflow-hidden bg-gray-200 dark:bg-gray-700 mt-8"
			     x-data="{ playing: false }" data-animate="fade-up">
				<div x-show="!playing" class="absolute inset-0 flex items-center justify-center cursor-pointer" @click="playing = true">
					<img src="https://made-byshape.transforms.svdcdn.com/production/uploads/images/MadeByShape-Studio/shape-office.jpg?w=1200&q=95&auto=format&fit=crop&crop=focalpoint&fp-x=0.5&fp-y=0.5"
					     alt="" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
					<div class="relative z-10 w-20 h-20 lg:w-24 lg:h-24 rounded-full bg-[#a6cc5a] flex items-center justify-center hover:scale-110 transition-transform shadow-lg">
						<svg class="w-8 h-8 ml-1" fill="currentColor" viewBox="0 0 24 24"><polygon points="5,3 19,12 5,21"/></svg>
					</div>
				</div>
				<iframe x-show="playing" x-transition.opacity
				        src="https://player.vimeo.com/video/922839949?autoplay=1&loop=1&autopause=0&mute=1&controls=0"
				        class="absolute inset-0 w-full h-full" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
			</div>
		</div>

		<!-- ============================================================ -->
		<!-- BLOG — Swiper carousel                                        -->
		<!-- ============================================================ -->
		<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 pb-16 lg:pb-24">
			<h2 class="text-[2.5rem] lg:text-[3.5rem] leading-tight font-normal mb-10 text-[#010202] dark:text-white"
			    data-animate="fade-up">
				The latest<br>from our<br>design studio
			</h2>
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
						   class="group block bg-gray-50 dark:bg-gray-800 rounded-2xl lg:rounded-3xl overflow-hidden hover:bg-[#a6cc5a] dark:hover:bg-[#a6cc5a] transition-colors duration-500">
							<div class="aspect-[4/3] bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-600 relative overflow-hidden">
								<span class="absolute inset-0 flex items-center justify-center text-7xl opacity-20 group-hover:opacity-30 transition-opacity">📝</span>
							</div>
							<div class="p-5 lg:p-6">
								<h3 class="text-lg lg:text-xl font-normal mb-3 group-hover:text-black transition-colors duration-500"><?php echo esc_html($post['title']); ?></h3>
								<span class="text-sm font-light text-[#999a9a] group-hover:text-black/60 transition-colors duration-500"><?php echo esc_html($post['read']); ?></span>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- ================================================================ -->
	<!-- AI TESTIMONIAL — matches [8] div                                  -->
	<!-- ================================================================ -->
	<div class="mx-auto max-w-[1400px] px-4 lg:px-6 xl:px-10 py-16 lg:py-24 border-t border-black/5 dark:border-white/10">
		<h2 class="text-[3rem] lg:text-[5.5rem] xl:text-[7rem] leading-none font-normal mb-10 text-[#010202] dark:text-white"
		    data-animate="fade-up">
			See what AI has<br>to say about us
		</h2>

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

	<!-- ================================================================ -->
	<!-- MARQUEE — pre-footer                                              -->
	<!-- ================================================================ -->
	<div class="py-8 lg:py-12 overflow-hidden border-t border-black/5 dark:border-white/10">
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
	</div>

<?php get_footer(); ?>