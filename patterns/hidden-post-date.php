<?php
/**
 * Title: Post date
 * Slug: salvatore/hidden-post-date
 * Inserter: no
 */
?>
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"var:preset|color|light-grey-1","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
    <div class="wp-block-group" >

        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
            <p style="font-style:normal;font-weight:700">
                <?php echo esc_html_x( 'First Published:', 'Prefix for the post published on: Published on', 'salvatore' ); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:post-date {"fontSize":"normal"} /-->
        </div>
        <!-- /wp:group -->

        <?php
        // Check if the post has been updated.
        if ( get_the_modified_time( '' ) > get_the_time( '' ) ) : ?>

        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
            <p style="font-style:normal;font-weight:700">
                <?php echo esc_html_x( 'Last Updated', 'Prefix for the post updated on: Last Updated on', 'salvatore' ); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:post-date {"displayType":"modified","fontSize":"normal"} /-->
        </div>
        <!-- /wp:group -->

        <?php endif;?>

    </div>
    <!-- /wp:group -->
