<?php
/**
 * Title: Post meta
 * Slug: salvatore/hidden-post-meta
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-group">
        <?php
        // Check if the post has been updated.
        if ( get_the_modified_time( 'U' ) !== get_the_time( 'U' ) ) : ?>
            <!-- wp:paragraph {"fontSize":"small","textColor":"contrast-2"} -->
            <p class="has-small-font-size has-contrast-2-color has-text-color">
                <strong><?php echo esc_html_x( 'Last Updated on', 'Prefix for the post updated on: Last Updated on', 'salvatore' ); ?></strong>
            </p>
            <!-- /wp:paragraph -->
            <!-- wp:post-date {"format":"M j, Y","isLink":true, "displayType":"modified" } /-->
        <?php else : ?>
            <!-- wp:paragraph {"fontSize":"small","textColor":"contrast-2"} -->
            <p class="has-small-font-size has-contrast-2-color has-text-color">
                <strong><?php echo esc_html_x( 'Published on', 'Prefix for the post published on: Published on', 'salvatore' ); ?></strong>
            </p>
            <!-- /wp:paragraph -->
            <!-- wp:post-date {"format":"M j, Y","isLink":true } /-->
        <?php endif; ?>

		<!-- wp:paragraph {"textColor":"contrast-2"} -->
		<p class="has-contrast-2-color has-text-color">—</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-2"} -->
		<p class="has-small-font-size has-contrast-2-color has-text-color"><?php echo esc_html_x( 'by', 'Prefix for the post author block: By author name', 'salvatore' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:post-author-name {"isLink":true} /-->

		<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html_x( 'in ', 'Prefix for the post category block: in category name', 'salvatore' ); ?>"} /-->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
