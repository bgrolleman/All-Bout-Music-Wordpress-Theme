<?php
/**
 * Main Index Package
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<style type="text/css" media="screen">
			@import url( <?php bloginfo('stylesheet_url'); ?> );
		</style>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_get_archives('type=monthly&format=link'); ?>
		<?php wp_head(); ?>
	</head>
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
		<div id="footer">
			<h6>Allboutmusic.de - Copyright 2010 - Contact <a href="mailto:info@allboutmusic.de">info@allboutmusic.de</a></h6>
		</div>
	</body>
</html>
