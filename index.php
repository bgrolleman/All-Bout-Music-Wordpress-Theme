<?php get_header(); ?>
	<body <?php body_class(); ?>>
		<div id="content">
			<?php if (have_posts()) : 
				while (have_posts()) : the_post(); ?>
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						<?php the_date('','<h4>','</h4>'); ?>
						<?php the_content(__('more...')); ?>
					</div>
				<?php endwhile; ?>
				<div class="navigation"><?php next_posts_link('&laquo; Older Entries') ?> <?php previous_posts_link('Newer Entries &raquo;') ?></div>
			<?php else: ?>
				<h3><?php _e('Sorry'); ?></h3>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		<div id="sidebar">
			<div id="languagebar">
				<?php echo qtrans_generateLanguageSelectCode('image'); ?>
				<!--<a href="#"><img src="<?php bloginfo('template_directory') ?>/flags/de.png" /></a>
				<a href="#"><img src="<?php bloginfo('template_directory') ?>/flags/gb.png" /></a>
				<a href="#"><img src="<?php bloginfo('template_directory') ?>/flags/nl.png" /></a>-->
			</div>
			<ul>
				<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
			</ul>
		</div>
<?php get_footer(); ?>
