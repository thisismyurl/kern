<?php
/**
 * Title: Story Grid
 * Slug: kern/story-grid
 * Categories: kern-layouts
 * Viewport Width: 1320
 * Inserter: true
 *
 * The below-the-fold four-column grid of story cards — the reference
 * layout's dense index of smaller stories under the lead. Portrait 4:5
 * crops (kern-card image size) keep a dense row levelled and quiet, the
 * way a contact sheet reads rather than a wall of landscape thumbnails.
 *
 * queryId 402 keeps this independent of the Lead Story Hero's query
 * (queryId 401) when both sit on the same page — see that pattern's
 * docblock for why a fixed, non-zero queryId matters here.
 *
 * @package kern
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:query {"queryId":402,"query":{"perPage":8,"postType":"post","order":"desc","orderBy":"date","offset":1,"inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"className":"kn-grid","layout":{"type":"grid","columnCount":4},"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|6"}}}} -->

		<!-- wp:group {"className":"kn-card","layout":{"type":"default"}} -->
		<div class="wp-block-group kn-card">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","className":"kn-card__media","sizeSlug":"kern-card"} /-->
			<!-- wp:post-terms {"term":"category","className":"kn-rubric"} /-->
			<!-- wp:post-title {"level":3,"isLink":true} /-->
			<!-- wp:post-date /-->
		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'More stories will appear here as you publish them.', 'kern' ); ?></p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|12"}}}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
