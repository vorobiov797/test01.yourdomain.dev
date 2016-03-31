<?php
/**
 * Index
 *
 * Standard loop for the front-page
 */
get_header();?>

<div class="row">
	<div class="large-8 medium-8 small-12 columns">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?><!-- BEGIN of Post -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h3>
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'foundation'), the_title_attribute('echo=0'))); ?>" rel="bookmark">
							<?php the_title(); ?>
						</a>
					</h3>
					<?php if (is_sticky()) : ?>
						<span class="right radius secondary label"><?php _e('Sticky', 'foundation'); ?></span>
					<?php endif; ?>
					<h6>Written by <?php the_author_link(); ?> on <?php the_time(get_option('date_format')); ?></h6>
					<?php if (has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>
					<?php the_excerpt(); ?>
					<!-- Use wp_trim_words() instead if you need specific number of words -->
				</article>
			<?php endwhile; ?><!-- END of Post -->
		<?php endif; ?>
		<div class="pagination">
			<?php foundation_pagination(); ?>
		</div><!-- END of .pagination -->
	</div><!-- END of .columns -->
	<div class="large-4 medium-4 small-12 columns sidebar">
		<?php get_sidebar('right'); ?>
	</div><!-- END of .columns.sidebar -->
</div><!-- END of .row-->

<?php get_footer(); ?>