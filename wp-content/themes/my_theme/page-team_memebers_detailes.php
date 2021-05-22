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
    <form method="GET">

        <select name="orderby" id="orderby">
            <option
                    value="date"
				<?php echo selected($_GET['orderby'], 'date'); ?>
            >
                Newest to Oldest
            </option>
            <option
                    value="title"
				<?php echo selected($_GET['orderby'], 'title'); ?>
            >
                Alphabetical
            </option>
        </select>

        <input
                id="order"
                type="hidden"
                name="order"
                value="<?php echo (isset($_GET['order']) && $_GET['order'] == 'ASC') ? 'ASC' : 'DESC'; ?>"
        />


		<?php

		$terms = get_terms([
			'taxonomy' => 'department_type',
			'hide_empty' => false
		]);

		foreach ($terms as $term) :

			?>

            <label>

                <input
                        type="checkbox"
                        name="department_type[]"
                        value="<?php echo $term->slug; ?>"
					<?php checked(
						(isset($_GET['department_type']) && in_array($term->slug, $_GET['department_type']))
					) ?>
                />

				<?php echo $term->name; ?>

            </label>

		<?php endforeach; ?>


        <button type="submit">Apply</button>

    </form>




    <div class="wrapper">

		<?php
		if(have_posts()){
			while(have_posts()){ the_post();
				?>

                <div class="department-card">

					<?php
					if(has_post_thumbnail()){
						the_post_thumbnail('full');
					}
					?>

                    <h3><?php the_title(); ?></h3>

					<?php
					$term_obj_list = get_the_terms($post->ID, 'department_type');
					echo '<strong>Type:</strong> ' . join(', ', wp_list_pluck($term_obj_list, 'name'));
					?>

                </div>

				<?php
			}
		}
		?>

    </div>
</div>
<?php
get_footer();
