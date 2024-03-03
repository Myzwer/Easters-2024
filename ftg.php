<?php
/**
 * Template Name: Custom - First Time Guest
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage BunnyFooFoo
 * @since 1.0.0
 */

get_header(); ?>

    <div class="bg-no-repeat bg-scroll bg-cover relative overflow-hidden background-header"
         style="background:
                 url('<?php echo get_template_directory_uri(); ?>/assets/src/img/background.jpg') center center;">
        <div class="hidden xl:block absolute absolute-center ">
            <img class="opacity-100" src="<?php the_field('thorns', 'options'); ?>" alt="Thorns">
        </div>
        <div class="content-middle text-white text-center">
            <h1 class="text-6xl mb-5 text-black uppercase font-bold"><?php the_field('title'); ?></h1>
            <h2 class="text-2xl mb-5 text-black uppercase font-bold"><?php the_field('subtitle'); ?></h2>
        </div>
    </div>

    <div class="bg-gray">
        <div class='lg:max-w-6xl mx-auto grid grid-cols-12 p-5 py-10 gap-4 md:gap-10'>
            <div class="col-span-12 relative">
                <h2 class="text-4xl font-bold uppercase text-white"><?php the_field('directions_title'); ?></h2>
            </div>
            <div class="col-span-12 md:col-span-6 relative">
                <?php
                // Gravity Forms Shortcode
                $formid = get_field("maps_shortcode");
                echo do_shortcode("[wpgmza id='$formid']");
                ?>

            </div>

            <div class="col-span-12 md:col-span-6 relative md:mx-10 mt-5">
                <?php
                if (have_rows('locations')):
                while (have_rows('locations')) :
                the_row();
                ?>


                <div class="pb-10 text-white">
                    <h3 class="text-xl font-bold uppercase"><?php the_sub_field('location_title'); ?></h3>
                    <p class="pb-5"><?php the_sub_field('address'); ?></p>

                    <a href="<?php the_sub_field('location_link'); ?>" target="_blank">
                        <button class="fab-main">
                            <i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i> Directions
                        </button>
                    </a>
                </div>

                    <?php
                    endwhile;
                    endif;
                    ?>


            </div>
        </div>
    </div>

<?php get_footer();
