<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brucgt
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'brucgt'); ?></a>

		<?php /*
		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$brucgt_description = get_bloginfo('description', 'display');
				if ($brucgt_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $brucgt_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'brucgt'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
		*/ ?>

		<header class="bg-white p-4">
			<div class="max-w-screen-xl container mx-auto">

				<div class="flex justify-between items-center">
					<!-- Brand -->
					<div>
						<a class="text-3xl text-primary font-bold block leading-[1.2] underline underline-offset-[3]">BRUCGT</a>
						<span class="block text-xs font-medium leading-[1.3]">BRU Consumer Goods Trading</span>
					</div>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'menu-header',
							'container'		 => null,
						)
					);
					?>

				</div>

				<div class="mt-4 flex gap-4">

					<div class="relative" x-data="{open: false}" @click.outside="open = false">
						<button @click="open = !open" class="bg-primary rounded-t text-white font-light py-3 text-lg px-6 flex items-center gap-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
							</svg>
							Browse Category
						</button>
						<ul x-cloak x-collapse x-show="open" class="absolute w-full rounded-b overflow-hidden shadow">
							<li class="bg-white w-full py-2 px-4 font-semibold">
								<a href="">All</a>
							</li>
							<li class="bg-white w-full py-2 px-4 font-semibold">
								<a href="">Best Seller</a>
							</li>
							<li class="bg-white w-full py-2 px-4 font-semibold">
								<a href="">Trending</a>
							</li>
							<li class="bg-white w-full py-2 px-4 font-semibold">
								<a href="">Clothing</a>
							</li>
							<li class="bg-white w-full py-2 px-4 font-semibold">
								<a href="">Footwear</a>
							</li>
						</ul>
					</div>

					<div class="bru-search-form">
						<?php aws_get_search_form( true ); ?>
					</div>
					<!-- <div class="flex-grow flex">
						<input class="h-full w-full border border-r-0 border-gray-300 focus:border-primary px-4  rounded-l" type="search" name="" placeholder="Search Products Here" />
						<button class="px-6 text-white bg-slate-700 rounded-r">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
							</svg>
						</button>
					</div> -->


					<button class="border border-gray-300 px-6 rounded flex items-center gap-2">

						<div class="indicator">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
							</svg>
							<?php if (WC()->cart->get_cart_contents_count()) : ?>
								<span class="indicator-item badge badge-sm"><?= WC()->cart->get_cart_contents_count() ?></span>
							<?php endif ?>
						</div>

						<span class="font-bold"><?= WC()->cart->get_cart_total() ?></span>
					</button>
				</div>

			</div>
		</header>