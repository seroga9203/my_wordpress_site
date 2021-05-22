<?php
/**
 * Template Name: Home page
 *
 * @package WordPress
 */
get_header();
?>
    <h2><?php the_title(); ?></h2>
    <div class="content"><?php the_content() ?></div>
    <h2>Some default text section</h2>
    <div>
        Some default text section(content)
    </div>
<?php
get_footer();
