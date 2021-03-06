<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the page header div.
 *
 * @package Hestia
 * @since Hestia 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121318977-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-121318977-1');
</script>


<meta charset='<?php bloginfo( 'charset' ); ?>'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	$wrapper_div_classes = 'wrapper ';
	if ( is_single() ) {
		$wrapper_div_classes .= join( ' ', get_post_class() );
	}
	?>

	<div class="<?php echo esc_attr( $wrapper_div_classes ); ?>">

	<?php
	$header_class = '';
	$hide_top_bar = get_theme_mod( 'hestia_top_bar_hide', true );
	if ( (bool) $hide_top_bar === false ) {
		$header_class .= 'header-with-topbar';
	}
	?>
		<header class="header <?php echo esc_attr( $header_class ); ?>">
			<?php do_action( 'hestia_do_header' ); ?>
