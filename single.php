<?php get_header(); ?>

	<div id="content">

		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><a href="/"><?php bloginfo('name'); ?></a> : <a href="/archive/"><?php the_time('m.Y') ?></a> : <b><?php the_title(); ?></b> <small>(<?php the_category(', ') ?>)</small></h2>

			<div class="entry">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

				<p>
					<small>
						
						
					</small>
				</p>

			</div>
		</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
	<small><?php edit_post_link('Edit', '<p>', '</p>'); ?></small>

	</div>
	
<?php get_footer(); ?>
