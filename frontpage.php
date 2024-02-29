<?php
/**
 * Template Name: Custom - Front Page
 *
 * The Frontpage of the BunnyFooFoo Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage BunnyFooFoo
 * @author Josh Forrester <josh@onefortyfivedesign.com>
 * @version 1.0.0
 */

get_header(); ?>

    <video class="header-video" src="<?php the_field('background_video'); ?>" autoplay loop playsinline muted></video>

    <div class="viewport-header">
        <div class="head-container">
            <img class="w-11/12 md:w-8/12 lg:w-1/3 max-w-8xl mx-auto" src="<?php the_field('main_brand'); ?>" alt="">

            <div class="pt-5">
                <?php if (have_rows('main_cta')): ?>
                    <?php while (have_rows('main_cta')): the_row();
                        ?>
                        <a href="<?php the_sub_field('button_link'); ?>">
                            <button class="fab-main">
                                <?php the_sub_field('button_text'); ?>
                            </button>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="bg-gray text-white p-10">
        <div class="text-center mx-auto">
            <h1 class="uppercase font-bold text-2xl lg:text-5xl"><?php the_field('tagline'); ?></h1>
        </div>
    </div>


    <div class="bg-no-repeat bg-scroll bg-cover relative overflow-hidden"
         style="background:
                 url('<?php echo get_template_directory_uri(); ?>/assets/src/img/background.jpg') center center;">

        <div class="hidden xl:block absolute right-0">
            <img class="opacity-30" src="<?php the_field('crown', 'options'); ?>" alt="Crown">
        </div>

        <div class=" lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4 md:gap-10 timesdates p-5">
                <div class="col-span-12 md:col-span-6 prose">
                    <?php the_field('church_locations'); ?>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();