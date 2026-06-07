<?php
/**
 * Title: Works Directory
 * Slug: kern/works-directory
 * Categories: kern-work
 * Description: Portfolio as a typographic index — title and year, no card grid. Anti-thumbnail pattern.
 * Inserter: true
 *
 * [SKIN] Portfolio presented as a typographic index. No card grid. No thumbnails.
 *
 * Titles as primary navigation — the anti-thumbnail pattern. Type studios,
 * independent designers, and UX practitioners know their work by title.
 * The year is the only secondary data needed. This is how design portfolios
 * have been indexed in print since the modernist era — Kern brings that
 * tradition to WordPress.
 *
 * Teaching note: the `is-style-kern-directory-entry` block style on the inner
 * group is what adds the top rule and the studio-press hover accent. That style
 * is registered in skin.php and defined in skin.css. You can use this same
 * pattern with any custom post type — just change the postType query parameter.
 *
 * Pillar 3 (Community over Self-interest): the directory layout costs nothing
 * to maintain. No thumbnails to art-direct or optimise. The content speaks.
 */
?>
<!-- wp:group {"className":"kern-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<div class="wp-block-group kern-section" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Section header: label + "All projects" link as a pair -->
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"},"border":{"bottom":{"color":"var:preset|color|studio-rule","style":"solid","width":"1px"}}}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--6);border-bottom:1px solid var(--wp--preset--color--studio-rule)">
		<!-- wp:heading {"level":2,"fontSize":"sm","className":"is-style-kern-eyebrow","style":{"color":{"text":"var:preset|color|studio-mid"}}} -->
		<h2 class="wp-block-heading has-sm-font-size is-style-kern-eyebrow has-studio-mid-color has-text-color">Selected Work</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"is-style-kern-annotation"} -->
		<p class="is-style-kern-annotation"><a href="/work">All projects &rarr;</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Directory query: 6 most recent posts -->
	<!-- wp:query {"queryId":2,"query":{"perPage":6,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"kern-works-query","layout":{"type":"default"}} -->
	<div class="wp-block-query kern-works-query">

		<!-- wp:post-template {"layout":{"type":"default"}} -->

			<!-- Directory entry: title + categories (left) · year (right) -->
			<!-- wp:group {"className":"is-style-kern-directory-entry kern-directory-entry","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
			<div class="wp-block-group is-style-kern-directory-entry kern-directory-entry">

				<!-- Left column: title and category tags -->
				<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
				<div class="wp-block-group">
					<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"2xl","style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"400","letterSpacing":"-0.01em","textDecoration":"none"},"color":{"text":"var:preset|color|studio-black"}}} /-->
					<!-- wp:post-terms {"term":"category","style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|studio-press"}}} /-->
				</div>
				<!-- /wp:group -->

				<!-- Right column: year only — the one date data point that matters in a portfolio -->
				<!-- wp:post-date {"format":"Y","style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|xs"},"color":{"text":"var:preset|color|studio-mid"}}} /-->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- Empty state: orient the editor, not just a void -->
		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"className":"is-style-kern-annotation","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"}}}} -->
			<p class="is-style-kern-annotation" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8)">No work published yet. Add posts to populate the works directory.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
