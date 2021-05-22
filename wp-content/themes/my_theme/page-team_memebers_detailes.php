<?php
/**
 * Template Name: Team Members details pages
 *
 * @package WordPress
 */

get_header();
?>
<h2 class="title"><?php the_title(); ?></h2>
<div class="short-bio"><?php the_content() ?></div>
<div class="photo">
    <?php
	if ( has_post_thumbnail()) {
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
		echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
		the_post_thumbnail('thumbnail');
		echo '</a>';
	}
	?>
</div>
<div class="department">
	<?php if( get_field('department') ): ?>
        <p><?php the_field('department'); ?></p>
	<?php endif; ?>
</div>
<?php
get_footer();
