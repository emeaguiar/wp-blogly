<?php
/**
 * Site header
 */
?>

<header
	class="site-header"
	id="main-header"
	role="banner"
	itemscope="itemscope"
	itemtype="http://schema.org/WPHeader"
>
	<div class="wrapper">
		<div class="navigation-menu -side -left">
			<?php get_template_part( 'partials/nav', 'actions' ); ?>
		</div>
		<div class="navigation-menu -logo -center">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				bloginfo( 'name' );
			}
			?>
		</div>
		<div class="navigation-menu -side -right">
			<?php get_template_part( 'partials/nav', 'notifications' ); ?>
		</div>
		<nav class="navigation-menu -bottom" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
			<?php
			wp_nav_menu( [
				'theme_location' => 'primary',
				'container'      => 'ul',
				'menu_class'     => 'primary-menu menu',
			] );
			?>
		</nav>
	</div>
</header>
