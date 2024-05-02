<?php
/**
 * Title: Content no title
 * Slug: wwsuit/content-no-title
 * Categories: wwsuit-theme
 *
 * @package WW Suit
 */

?>
<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size">
	<!-- wp:html -->
	<div><?php echo esc_html_x( 'Posted on &nbsp;', 'Label for the date of a post', 'wwsuit' ); ?></div>
	<!-- /wp:html --><!-- wp:post-date {"format":"M j, Y"} /-->
</div>
<!-- /wp:group -->

<!-- wp:separator {"backgroundColor":"white"} -->
<hr class="wp-block-separator has-text-color has-white-color has-alpha-channel-opacity has-white-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"2rem","left":"2rem"},"margin":{"top":"1.5em","bottom":"1.5em"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:1.5em;margin-bottom:1.5em;padding-right:2rem;padding-left:2rem">
	<!-- wp:post-content /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"typography":{"fontSize":"14px"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group has-small-font-size" style="font-size:14px"><!-- wp:post-date {"format":"Y-m-d"} /-->
	<!-- wp:post-terms {"term":"category","prefix":"Filed in: "} /-->
	<!-- wp:post-terms {"term":"post_tag","prefix":"Tagged: "} /-->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
