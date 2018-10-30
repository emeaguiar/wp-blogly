<?php
/**
 * The main template file
 */

get_header(); ?>

<main class="site-content" id="content">
	<div class="page-container -narrow">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ): the_post(); ?>
				<h2>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</main>

<?php get_footer();
