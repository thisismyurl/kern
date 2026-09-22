<?php
/**
 * Title: Featured in This Issue
 * Slug: kern/featured-in-issue
 * Categories: kern-editorial
 * Viewport Width: 900
 * Inserter: true
 *
 * A compact curator's list — three or four pieces an editor wants to
 * surface regardless of publish date, the way a print issue's table of
 * contents pulls out its own highlights. Bound to a small Query Loop
 * (queryId 403) rather than static text so the list is always real
 * published work. Each entry is marked with a plain em dash rather than a
 * number, the way a contents page reads when its running order does not
 * matter — this list is curated, not sequential.
 *
 * @package kern
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group">

	<!-- wp:paragraph {"className":"is-style-kn-rubric"} -->
	<p class="is-style-kn-rubric"><?php esc_html_e( 'In This Issue', 'kern' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:query {"queryId":403,"query":{"perPage":4,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"className":"kn-issue-list","layout":{"type":"default"}} -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"kn-issue-list__index"} -->
				<p class="kn-issue-list__index">—</p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"layout":{"type":"default"}} -->
				<div class="wp-block-group">
					<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"md"} /-->
					<!-- wp:post-author {"showAvatar":false,"showBio":false,"isLink":false} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Nothing curated yet — the list fills in as you publish.', 'kern' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
