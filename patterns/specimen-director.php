<?php
/**
 * Title: Specimen Director Hero
 * Slug: kern/specimen-director
 * Categories: kern-studio
 * Description: The studio name at display scale as the hero — no photography required. Fraunces weight 300. Pillar 10 (Beyond Pure).
 * Inserter: true
 *
 * [SKIN] Kern's signature hero pattern.
 *
 * The studio name at display scale IS the hero. No stock photo. No decorative
 * mesh gradient. The type does the work. This is the pattern that makes
 * non-type-people ask "where's the hero image?" — it's a design decision,
 * not an omission.
 *
 * Teaching note: this pattern demonstrates that in FSE, the site title block
 * can serve as a hero element — it's not just for the header. The specimen
 * director pattern lifts the site title out of its utilitarian role and makes
 * it the primary visual statement of the page.
 *
 * Pillar 10 (Beyond Pure): the most conventional choice here would be a big
 * hero photograph. We refused that choice on purpose.
 */
?>
<!-- wp:group {"className":"kern-specimen-director kern-band--ground","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<div class="wp-block-group kern-specimen-director kern-band--ground" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"900px","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
	<div class="wp-block-group">

		<!-- Eyebrow: the discipline label reads as a category, not a headline -->
		<!-- wp:paragraph {"className":"is-style-kern-eyebrow kern-eyebrow"} -->
		<p class="is-style-kern-eyebrow kern-eyebrow">Brand Identity &middot; Type &middot; Design</p>
		<!-- /wp:paragraph -->

		<!-- The specimen headline: site title at display scale. This is the whole
		     visual statement. Weight 300 because the contrast between thin strokes
		     and the scale of the glyph is the design. Weight 400+ loses the tension.
		     Pillar 8 (Kodawari): the weight choice here is load-bearing. -->
		<!-- wp:site-title {"level":1,"isLink":false,"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontSize":"var:preset|font-size|display","fontWeight":"300","letterSpacing":"-0.02em","lineHeight":"1.05"},"color":{"text":"var:preset|color|studio-black"}}} /-->

		<!-- wp:site-tagline {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|lg","fontWeight":"300","lineHeight":"1.5"},"color":{"text":"var:preset|color|studio-ink"}}} /-->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
