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
            <h1 class = "uppercase font-bold text-2xl lg:text-5xl"><?php the_field('tagline'); ?></h1>
        </div>
    </div>


    <div class="bg-white md:p-10">
        <div class=" lg:max-w-5xl lg:mx-auto">
            <div class="grid grid-cols-12 gap-4 md:gap-10">
                <div class="col-span-12 md:col-span-4">
                    <?php get_template_part('components/cards/_sample-card'); ?>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <div class="prose">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto
                        error et laudantium molestiae odit tempora temporibus? Aliquid aspernatur aut autem dolore, enim
                        minima molestias sapiente. Consectetur culpa nihil obcaecati?
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4 prose">
                    <h2>Header Line</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores earum magni nihil
                        praesentium quam sequi sunt vitae. Excepturi iure molestias perferendis quidem, recusandae
                        tempora. A hic nihil pariatur suscipit ut.</p>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();