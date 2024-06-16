<?php
/**
 * Title: Post taxonomy
 * Slug: salvatore/hidden-post-taxonomy
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
    <div class="wp-block-group">

        <!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html_x( 'Filed Under: ', 'Prefix for the post category block: in category name', 'salvatore' ); ?>"} /-->

<!-- wp:post-terms {"term":"post_tag","prefix":"<?php echo esc_html_x( 'Tagged: ', 'Prefix for the post tags block: in tag name', 'salvatore' ); ?>"} /-->

</div>
<!-- /wp:group -->