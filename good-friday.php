<?php
/**
 * Template Name: Custom - Good Friday
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage BunnyFooFoo
 * @since 1.0.0
 */

get_header(); ?>

    <div class="bg-no-repeat bg-scroll bg-cover relative overflow-hidden"
         style="background:
                 url('<?php echo get_template_directory_uri(); ?>/assets/src/img/gf-bg.jpg') center center;">
    <div class=" relative overflow-hidden">

        <div class=" lg:max-w-5xl lg:mx-auto py-28 px-5">
            <h1 class="text-8xl md:text-9xl font-bold mb-5 text-white"><?php the_field('title'); ?></h1>
            <h3 class="text-xl mb-5 text-white"><?php the_field('details'); ?></h3>
        </div>
    </div>



    </div>

<?php
// Check value exists.
if (have_rows('experience_info')) :

    // Loop through rows.
    while (have_rows('experience_info')) : the_row();

        switch (get_row_layout()) {
            case 'dark_mode_block':
                get_template_part('components/blocks/_dark-block');
                break;

            case 'light_mode_block':
                get_template_part('components/blocks/_light-block');
                break;

        }

        // End loop.
    endwhile;
endif;
?>


<?php get_template_part('components/blocks/_faq-light'); ?>

<?php get_footer();