<?php
/**
 * Mobile friendly, app-style template with timely schedule information to use as a front page with PWA features during a WordCamp.
 *
 * @package wordcamp-pwap
 * @subpackage wordcamp-pwap/templates
 */

namespace WordCamp\PWAPage\Templates;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<h1><?php echo esc_html_x( 'Live Schedule', 'title', 'wordcamp-pwa-page' ); ?></h1>

	<h2><?php echo esc_html_x( 'On now', 'title', 'wordcamp-pwa-page' ); ?></h2>
	<div id="on-now" class="pwa-page-content"></div>

	<h2><?php echo esc_html_x( 'Up next', 'title', 'wordcamp-pwa-page' ); ?></h2>
	<div id="up-next" class="pwa-page-content"></div>

	<a href="<?php echo esc_url( site_url( __( 'schedule', 'wordcamp-pwa-page' ) ) ); ?>" class="full-schedule">
		<?php echo esc_html_x( 'View Full Schedule', 'text', 'wordcamp-pwa-page' ); ?>
	</a>

	<h2><?php echo esc_html_x( 'Latest Posts', 'title', 'wordcamp-pwa-page' ); ?></h2>
	<div id="latest-posts" class="pwa-page-content"></div>
	<a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>" class="all-posts">
		<?php echo esc_html_x( 'View All Posts', 'text', 'wordcamp-pwa-page' ); ?>
	</a>
<?php wp_footer(); ?>
</body>
</html>
