<?php

/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Gold Train
 */

get_header(); ?>

<div id="primary" class="content-area min-height d-flex justify-content-center align-items-center">
	<div id="content" class="site-content py-4 px-2" role="main">

		<header class="page-header text-lg-left my-2 pl-4">
			<h1 class="page-title display-3"><?php _e('Upss... ', 'gold-train'); ?></h1>
		</header>

		<div class="page-wrapper my-2 pl-4">
			<div class="page-content">
				<h2><?php _e('Niestety nie znaleźliśmy tego czego szukasz', 'gold-train'); ?></h2>
				<p><?php _e('wyszukaj jeszcze raz lub wróć na stronę główną', 'gold-train'); ?></p>

				<form role="search" method="get" class="search-form d-lg-none d-flex" action="<?php echo home_url('/'); ?>">
					<label for="searchField" class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></label>
					<div class="input-group justify-content-start">
						<input type="search" id="searchField" class="search-field border border-dark" placeholder="<?php echo esc_attr_x('Szukaj na stronie...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
						<span class="input-group-btn">
							<button type="submit" class="btn btn-default">
								<svg class="text-black gt-hover" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
									<path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z" /><?php echo esc_attr_x('f002 ', 'submit button') ?>
								</svg>
							</button>
						</span>
					</div>
				</form>
				<button class="btn gt-btn-dark rounded-pill mt-4 mt-lg-2"><a class="text-white" href="<?php echo get_home_url(); ?>">Strona główna</a></button>
			</div><!-- .page-content -->
		</div><!-- .page-wrapper -->

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>