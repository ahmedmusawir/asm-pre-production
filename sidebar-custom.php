<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cyberize
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside id="sidebar" class="widget-area">
  <?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #secondary -->