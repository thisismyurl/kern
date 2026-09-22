<?php
/**
 * Title: Lead Story Hero
 * Slug: kern/hero-lead-story
 * Categories: kern-layouts
 * Viewport Width: 1320
 * Inserter: true
 *
 * The homepage's single lead story: a large photograph on one side, the
 * rubric (category label), headline and standfirst on the other. Bound to
 * a one-item Query Loop rather than static content, so the "lead story" is
 * always whatever the editor actually most recently published — the image
 * is the real featured image of that post, never a placeholder.
 *
 * queryId is set to 401 (not the default 0) so this pattern can sit on the
 * same page as the Story Grid pattern (queryId 402) without WordPress
 * merging their pagination state.
 *
 * @package kern
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:query {"queryId":401,"className":"kn-hero","query":{"perPage":1,"postType":"post","order":"desc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query kn-hero">
	<!-- wp:post-template {"layout":{"type":"default"}} -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">

			<!-- wp:column {"verticalAlignment":"center","width":"58%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:58%">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","sizeSlug":"kern-card"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"42%","className":"kn-hero__content"} -->
			<div class="wp-block-column is-vertically-aligned-center kn-hero__content" style="flex-basis:42%">
				<!-- wp:post-terms {"term":"category"} /-->
				<!-- wp:post-title {"level":1,"isLink":true} /-->
				<!-- wp:post-excerpt {"className":"is-style-kn-standfirst","excerptLength":26} /-->
				<!-- wp:group {"className":"kn-byline","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
				<div class="wp-block-group kn-byline">
					<!-- wp:post-author {"showAvatar":false,"showBio":false,"isLink":true} /-->
					<!-- wp:post-date /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
		<!-- The lead story needs at least one published post to bind to; this
		     tells a brand-new install why the hero is quiet rather than showing
		     a broken layout. -->
		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'Publish your first piece and it will lead the homepage here.', 'kern' ); ?></p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
