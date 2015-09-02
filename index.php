<?php get_header(); ?>

	<div id="content">
<h2><a href="/"><?php bloginfo('name'); ?></a> :: <a href="/feeds/">feed</a> :: <a href="/archive/">all</a></h2>
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

				<div class="entry">
					<?php the_content('Read more &raquo;'); ?>
				</div>

			</div>
<br />
		<?php endwhile; ?>

			<?php next_posts_link('&laquo; Older') ?> | <?php previous_posts_link('Newer &raquo;') ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

	</div>


<?php get_footer(); ?>
