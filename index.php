<?php
/**
 * The main template file
 */

get_header(); ?>

<main class="site-content" id="content">
	<div class="page-container -narrow">
		<?php if ( have_posts() ) : ?>
			<div class="article-list">
				<?php while ( have_posts() ): the_post(); ?>
					<div class="item">
						<a href="<?php the_permalink(); ?>" class="link">
							<h2 class="title">
								<?php the_title(); ?>
							</h2>
							<time class="date"><?php the_time( 'j F Y' ); ?></time>
						</a>
					</div>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</main>

<?php get_footer();
