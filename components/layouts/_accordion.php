<?php
/**
 * Accordion Layout
 *
 * This file generates an accordion for use displaying the "where do I go when I get there" question.
 *
 *
 * Usage: get_template_part( 'components/blocks/_accordion');
 *
 * @package WordPress
 * @subpackage BunnyFooFoo
 * @author Josh Forrester <josh@onefortyfivedesign.com>
 * @version 1.0.0
 */
?>

<?php if (have_rows('single_location')):
    while (have_rows('single_location')) : the_row(); ?>
        <div class="accordion">
            <div class="accordion-item">
                <button id="accordion-button-1" aria-expanded="false">
                    <span class="accordion-title">
                        <?php the_sub_field('location_name'); ?>
                    </span>
                    <span class="icon" aria-hidden="true"></span>
                </button>
                <div class="accordion-content">
                    <?php the_sub_field('instructinos'); ?>
                </div>
            </div>
        </div>

    <?php
    endwhile;
endif;
?>