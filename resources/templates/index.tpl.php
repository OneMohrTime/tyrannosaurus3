<?php get_header(); ?>

<?php
    /**
     * Functions hooked into `theme/index/header` action.
     *
     * @hooked Pscheme\Tyrannosaurus\Index\render_header - 10
     */
    do_action('theme/index/header');
?>

<section class="section">
    <div class="wrapper">
        <div class="content">
            <?php if (have_posts()) : ?>
                <h4>Posts</h4>

                <div class="posts">
                    <?php while (have_posts()) : the_post() ?>
                        <?php
                            /**
                             * Functions hooked into `theme/index/post/thumbnail` action.
                             *
                             * @hooked Pscheme\Tyrannosaurus\App\Structure\render_post_thumbnail - 10
                             */
                            do_action('theme/index/post/thumbnail');
                        ?>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <?php
                    /**
                     * Functions hooked into `theme/index/content/none` action.
                     *
                     * @hooked Pscheme\Tyrannosaurus\App\Structure\render_empty_content - 10
                     */
                    do_action('theme/index/content/none');
                ?>
            <?php endif; ?>
        </div>

        <?php if (apply_filters('theme/index/sidebar/visibility', true)) : ?>
            <?php
                /**
                 * Functions hooked into `theme/index/sidebar` action.
                 *
                 * @hooked Pscheme\Tyrannosaurus\App\Structure\render_sidebar - 10
                 */
                do_action('theme/index/sidebar');
            ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
