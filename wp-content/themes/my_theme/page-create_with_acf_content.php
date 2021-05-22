<?php
/**
 * Template Name: Create a page with (use ACF flexible content)
 *
 * @package WordPress
 */

get_header();
?>
<?php if ( get_field( 'hero-banner' ) ): ?>
    <div class="hero-banner" style="background-image:url('<?php the_field( 'hero-banner' ); ?>');">
        <div class="hero-banner-content">
			<?php if ( get_field( 'hero-title' ) ): ?>
                <h2 class="hero-title"><?php the_field( 'hero-title' ); ?></h2>
			<?php endif; ?>
			<?php if ( get_field( 'hero-short-description' ) ): ?>
                <p class="hero-short-description"><?php the_field( 'hero-short-description' ); ?></p>
			<?php endif; ?>
			<?php if ( get_field( 'hero-cta-button' ) ): ?>
                <button name="button cta-button"><?php the_field( 'cta-button' ); ?></button>
			<?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php if ( get_field( 'team-members-section' ) ): ?>
    <div class="team-members-section"
         style="background-image:url('<?php the_field( 'team-members-section' ); ?>');"></div>
<?php endif; ?>

<?php
get_footer();
