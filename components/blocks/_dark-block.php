<?php
/**
 * Info Block Template Partial (dark mode)
 *
 * This file generates a block with dark background color that displays an image and a WYSIWYG editor
 *
 * ACF Required fields: Image, title & wysiwyg editor.
 *
 * Usage: get_template_part( 'components/blocks/_dark-block');
 *
 * @package WordPress
 * @subpackage BunnyFooFoo
 * @author Josh Forrester <josh@onefortyfivedesign.com>
 * @version 1.0.0
 */
?>

<div class="bg-gray py-14 dark-info">
    <div class='lg:max-w-6xl mx-auto grid grid-cols-12 p-5 py-10 gap-4 md:gap-10'>
        <div class="col-span-12 md:col-span-4 relative">
            <div class="content-middle-medium">
                <div class="border-8 border-white rounded-image-outer">
                    <img src="<?php the_sub_field('side_image'); ?>" alt="Decor Image" class="rounded-image">
                </div>
            </div>
        </div>

        <div class="col-span-12 md:col-span-8 relative md:mx-10 mt-5 md:mt-0">
            <h2 class="text-5xl lg:text-7xl font-bold uppercase pb-2 text-white"><?php the_sub_field('big_ass_title'); ?></h2>
            <div class="prose text-white">
                <?php the_sub_field('block_content'); ?>
            </div>
        </div>
    </div>
</div>


