<?php
/**
 * Title: Studio Bio
 * Slug: kern/studio-bio
 * Categories: kern-studio
 * Description: Dark-band About section — studio name large on the left, bio and credits on the right. Confident, not apologetic.
 * Inserter: true
 *
 * [SKIN] The studio's About section — two-column press-band layout.
 *
 * Dark band (kern-band--press). Studio name large on the left, bio text
 * and credentials on the right. The anti-"Meet the Team" pattern — Kern
 * studios are typically single practitioners or small teams who don't need
 * an org chart; they need a statement and a list of where they've appeared.
 *
 * The "credits" column (right) uses the annotation style for the label
 * and Jakarta sm for the values — the same visual grammar as the case
 * study metadata.
 *
 * Teaching note: the dark band (kern-band--press) is defined in skin.css
 * as a utility class. It sets background-color and color in one rule.
 * All text within it inherits the `studio-paper` colour — you don't need
 * individual color attributes on every child block. This is how CSS cascade
 * is supposed to work, and FSE theme.json often fights it — the utility
 * class restores it.
 *
 * Pillar 2 (Innovation over Compliance): the bio section is on a dark band
 * because studios should announce themselves. The "clean white about page"
 * is the safe choice. The press band is the confident one.
 */
?>
<!-- wp:group {"className":"kern-section kern-band--press","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<div class="wp-block-group kern-section kern-band--press" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Section label row -->
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"},"border":{"bottom":{"color":"rgba(255,255,255,0.15)","style":"solid","width":"1px"}}}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid rgba(255,255,255,0.15)">
		<!-- wp:paragraph {"className":"is-style-kern-eyebrow","style":{"color":{"text":"var:preset|color|studio-rule"}}} -->
		<p class="is-style-kern-eyebrow has-studio-rule-color has-text-color">Studio</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Bio layout: two columns — name/headline left, bio+credits right -->
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|12"}}} -->
	<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--10)">

		<!-- Left column: studio name large -->
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:site-title {"level":2,"isLink":false,"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"300","fontSize":"var:preset|font-size|3xl","letterSpacing":"-0.02em","lineHeight":"1.1"},"color":{"text":"var:preset|color|studio-paper"}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- Right column: bio text + credits -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontWeight":"300","fontSize":"var:preset|font-size|lg","lineHeight":"1.6"},"color":{"text":"var:preset|color|studio-paper"}}} -->
			<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--lg);font-weight:300;line-height:1.6;color:var(--wp--preset--color--studio-paper)">An independent type and brand studio. We work with publishers, cultural institutions, and independent brands to build visual languages that last. Each project begins with the letterform and works outward.</p>
			<!-- /wp:paragraph -->

			<!-- Credits / selected recognition -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|6"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--8)">

				<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"is-style-kern-eyebrow","style":{"color":{"text":"var:preset|color|studio-rule"}}} -->
					<p class="is-style-kern-eyebrow has-studio-rule-color has-text-color">Selected Work</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|studio-paper"}}} -->
					<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);color:var(--wp--preset--color--studio-paper)">Meridian Quarterly · The Folio Press · North Type · Common Ground Books</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"is-style-kern-eyebrow","style":{"color":{"text":"var:preset|color|studio-rule"}}} -->
					<p class="is-style-kern-eyebrow has-studio-rule-color has-text-color">Based in</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|studio-paper"}}} -->
					<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);color:var(--wp--preset--color--studio-paper)">Your City</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
