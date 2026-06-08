<?php
/**
 * Title: Display Hero
 * Slug: kern/display-hero
 * Categories: kern-studio
 * Viewport Width: 1280
 * Inserter: true
 * Description: Full-width typographic hero — a single display-scale Fraunces headline over a Jakarta descriptor, anchored by a studio-press rule. No image; the type is the composition.
 *
 * @package kern
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kern-display-hero","backgroundColor":"studio-paper","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<section class="wp-block-group alignfull kern-display-hero has-studio-paper-background-color has-background" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6)">

	<!-- A short rule in the press accent sets the measure before the type arrives. -->
	<!-- wp:separator {"className":"kern-display-hero__rule is-style-wide","backgroundColor":"studio-press","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|7"}}}} -->
	<hr class="wp-block-separator has-text-color has-studio-press-color has-alpha-channel-opacity has-studio-press-background-color has-background kern-display-hero__rule is-style-wide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--7)"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"level":1,"className":"kern-display-hero__headline","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"0.98","letterSpacing":"-0.03em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|7"}}},"textColor":"studio-black","fontSize":"display","fontFamily":"fraunces"} -->
	<h1 class="wp-block-heading kern-display-hero__headline has-studio-black-color has-text-color has-fraunces-font-family has-display-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--7);font-style:normal;font-weight:300;letter-spacing:-0.03em;line-height:0.98">Type as thought.</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"className":"kern-display-hero__descriptor","style":{"typography":{"fontWeight":"400","lineHeight":"1.5"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"studio-mid","fontSize":"md","fontFamily":"jakarta"} -->
	<p class="kern-display-hero__descriptor has-studio-mid-color has-text-color has-jakarta-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:400;line-height:1.5">A typography studio shaping letterforms, identities, and the systems that hold them together.</p>
	<!-- /wp:paragraph -->

</section>
<!-- /wp:group -->
