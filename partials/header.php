<?php
/**
 * Site header
 */
?>

<div
	class="site-header"
	id="main-header"
	role="banner"
	itemscope="itemscope"
	itemtype="http://schema.org/WPHeader"
>
	<div class="wrapper">
		<div class="navigation -left">
			<?php
			wp_nav_menu( [
				'theme_location' => 'header_left',
			] );
			?>
		</div>
		<div class="navigation -center"></div>
		<div class="navigation -right"></div>
	</div>
</div>
