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
			<?php
			wp_nav_menu( [
				'theme_location' => 'header_left',
				'container'      => 'ul',
				'menu_class'     => 'actions-menu menu',
			] );
			?>
		</div>
		<div class="navigation-menu -center">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				bloginfo( 'name' );
			}
			?>
		</div>
		<div class="navigation-menu -side -right">
			<?php
			wp_nav_menu( [
				'theme_location' => 'header_right',
				'container'      => 'ul',
				'menu_class'     => 'notifications-menu menu',
			] );
			?>
		</div>
		<nav class="navigation-menu -bottom" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
			<?php
			wp_nav_menu( [
				'theme_location' => 'header_bottom',
				'container'      => 'ul',
				'menu_class'     => 'primary-menu menu',
			] );
			?>
		</nav>
	</div>
</header>
