<?php
/**
 * Title: Contributor Byline
 * Slug: kern/byline-contributor
 * Categories: kern-masthead
 * Viewport Width: 900
 * Inserter: true
 *
 * A contributor's name, role tag and one-line bio — for a guest writer
 * whose credit is more than a WordPress user record: a poetry editor's
 * standing role, a critic's other outlet, a translator's language pair.
 * Insert at the top of a piece (above the headline) or in the article
 * footer as a "who wrote this" credit.
 *
 * kn-byline__role is the small tracked rubric-coloured tag that names what
 * this person does for the magazine — the same device the Masthead Page
 * pattern uses for the full staff list, applied to a single contributor.
 *
 * @package kern
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"className":"kn-byline","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
<div class="wp-block-group kn-byline">

	<!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"className":"kn-byline__role"} -->
		<p class="kn-byline__role"><?php esc_html_e( 'Contributing Editor, Poetry', 'kern' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"className":"kn-byline__name"} -->
		<p class="kn-byline__name"><?php esc_html_e( 'Naomi Achebe-Voss', 'kern' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"sm","style":{"color":{"text":"var:preset|color|ink-soft"}}} -->
		<p class="has-sm-font-size" style="color:var(--wp--preset--color--ink-soft)"><?php esc_html_e( 'Naomi has edited the poetry section since our fourth issue. Her own work has appeared in three chapbooks and one long, unfinished argument with her mother.', 'kern' ); ?></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
