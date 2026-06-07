<?php
/**
 * Title: Typeface Pairing Specimen
 * Slug: kern/typeface-pairing
 * Categories: kern-type
 * Description: A functional type specimen documenting the Fraunces + Plus Jakarta Sans pairing. Kern's unique signature feature.
 * Inserter: true
 *
 * [SKIN] Kern's unique signature feature — exists nowhere else in the WP directory.
 *
 * A functional type specimen built from the theme's own fonts. Design studio
 * practitioners recognise this immediately: it's the kind of page that type
 * foundry websites use to show font personality. Kern bakes it into the
 * pattern library so studios can publish their own type system documentation
 * as a WordPress page.
 *
 * The pattern demonstrates the Fraunces + Jakarta Sans pairing: Fraunces in
 * display at weight 300 (editorial, expressive), Jakarta at xs in uppercase
 * tracking (functional label, annotation). Each specimen block shows both
 * fonts at scale with their design rationale as a caption.
 *
 * Teaching note for Kern users: this is what a type specimen is — not just
 * showing letters, but showing the intended use at the intended scale with
 * the intended weight and tracking. The caption beneath each specimen is as
 * important as the letterforms above it. This is what typography education
 * looks like in a WordPress block.
 *
 * Pillar 9 (Archaeological Records): the type decisions are documented in the
 * pattern itself, not in a separate spec doc. When someone forks this theme
 * in five years, they'll know why Fraunces is at weight 300 and why the
 * tracking is -0.02em.
 */
?>
<!-- wp:group {"className":"kern-section kern-band--ground","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<div class="wp-block-group kern-section kern-band--ground" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Section label -->
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"0"},"border":{"bottom":{"color":"var:preset|color|studio-rule","style":"solid","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid var(--wp--preset--color--studio-rule)">
		<!-- wp:heading {"level":2,"fontSize":"sm","className":"is-style-kern-eyebrow","style":{"color":{"text":"var:preset|color|studio-mid"}}} -->
		<h2 class="wp-block-heading has-sm-font-size is-style-kern-eyebrow has-studio-mid-color has-text-color">Type System</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"is-style-kern-annotation"} -->
		<p class="is-style-kern-annotation">Fraunces &times; Plus Jakarta Sans</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Specimen 1: Fraunces Display — weight 300, the voice of the studio name -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|4"},"border":{"bottom":{"color":"var:preset|color|studio-rule","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);border-bottom:1px solid var(--wp--preset--color--studio-rule)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"300","fontSize":"var:preset|font-size|display","letterSpacing":"-0.02em","lineHeight":"1.05"},"color":{"text":"var:preset|color|studio-black"}}} -->
		<p style="font-family:var(--wp--preset--font-family--fraunces);font-size:var(--wp--preset--font-size--display);font-weight:300;letter-spacing:-0.02em;line-height:1.05;color:var(--wp--preset--color--studio-black)">Display / Light</p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-kern-annotation"} -->
			<p class="is-style-kern-annotation">Fraunces · Weight 300 · &minus;0.02em tracking · Studio name, page titles, pull quotes</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"is-style-kern-annotation"} -->
			<p class="is-style-kern-annotation">SIL OFL 1.1</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- Specimen 2: Fraunces Text — weight 400, the body serif voice -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|4"},"border":{"bottom":{"color":"var:preset|color|studio-rule","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);border-bottom:1px solid var(--wp--preset--color--studio-rule)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"400","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.01em","lineHeight":"1.2"},"color":{"text":"var:preset|color|studio-black"}}} -->
		<p style="font-family:var(--wp--preset--font-family--fraunces);font-size:var(--wp--preset--font-size--2xl);font-weight:400;letter-spacing:-0.01em;line-height:1.2;color:var(--wp--preset--color--studio-black)">Section Heading / Regular</p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-kern-annotation"} -->
			<p class="is-style-kern-annotation">Fraunces · Weight 400 · &minus;0.01em tracking · H2, H3, post titles in archives</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"is-style-kern-annotation"} -->
			<p class="is-style-kern-annotation">Variable · wght 100&ndash;900</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- Specimen 3: Jakarta Sans Body — the functional voice -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|4"},"border":{"bottom":{"color":"var:preset|color|studio-rule","style":"solid","width":"1px"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);border-bottom:1px solid var(--wp--preset--color--studio-rule)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontWeight":"400","fontSize":"var:preset|font-size|base","lineHeight":"1.7"},"color":{"text":"var:preset|color|studio-ink"}}} -->
		<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--base);font-weight:400;line-height:1.7;color:var(--wp--preset--color--studio-ink)">Body copy lives here — Jakarta at base size, 1.7 line-height, studio-ink colour. Long-form prose in a design studio context should still prioritise readability. The font earns its rate at 1.7. Never drop it below 1.6 for paragraph text.</p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-kern-annotation"} -->
			<p class="is-style-kern-annotation">Plus Jakarta Sans · Weight 400 · 1.7 line-height · Body, navigation, labels</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"is-style-kern-annotation"} -->
			<p class="is-style-kern-annotation">Variable · wght 200&ndash;800</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- Specimen 4: Jakarta Eyebrow — the label voice -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:paragraph {"className":"is-style-kern-eyebrow","style":{"typography":{"fontSize":"var:preset|font-size|sm"}}} -->
		<p class="is-style-kern-eyebrow" style="font-size:var(--wp--preset--font-size--sm)">Section Label / Eyebrow</p>
		<!-- /wp:paragraph -->
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"is-style-kern-annotation"} -->
			<p class="is-style-kern-annotation">Jakarta · Weight 600 · 0.12em tracking · Uppercase · Category labels, section eyebrows</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"is-style-kern-annotation"} -->
			<p class="is-style-kern-annotation">kern-eyebrow block style</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
