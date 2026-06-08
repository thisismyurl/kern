<?php
/**
 * Title: Studio Footer
 * Slug: kern/studio-footer
 * Categories: kern-studio
 * Viewport Width: 1280
 * Inserter: true
 * Description: A minimal two-column footer — studio name and location on the left, navigation links on the right, copyright beneath. Set on studio-black in studio-paper type.
 *
 * @package kern
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"kern-studio-footer","backgroundColor":"studio-black","textColor":"studio-paper","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|10","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<footer class="wp-block-group alignfull kern-studio-footer has-studio-paper-color has-studio-black-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6)">

	<!-- wp:columns {"verticalAlignment":"top","className":"kern-studio-footer__row"} -->
	<div class="wp-block-columns are-vertically-aligned-top kern-studio-footer__row">

		<!-- wp:column {"verticalAlignment":"top","width":"60%","className":"kern-studio-footer__brand"} -->
		<div class="wp-block-column is-vertically-aligned-top kern-studio-footer__brand" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"className":"kern-studio-footer__name","style":{"typography":{"fontWeight":"400","lineHeight":"1.1","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}},"fontSize":"xl","fontFamily":"fraunces"} -->
			<h2 class="wp-block-heading kern-studio-footer__name has-fraunces-font-family has-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--3);font-weight:400;letter-spacing:-0.01em;line-height:1.1">Kern Type Studio</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"kern-studio-footer__location","style":{"typography":{"fontWeight":"400","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"studio-rule","fontSize":"sm","fontFamily":"jakarta"} -->
			<p class="kern-studio-footer__location has-studio-rule-color has-text-color has-jakarta-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;font-weight:400;line-height:1.6">Toronto, Canada &middot; Drawing letters since 2009</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"40%","className":"kern-studio-footer__links"} -->
		<div class="wp-block-column is-vertically-aligned-top kern-studio-footer__links" style="flex-basis:40%">
			<!-- wp:navigation {"overlayMenu":"never","className":"kern-studio-footer__nav","style":{"typography":{"fontWeight":"500"},"spacing":{"blockGap":"var:preset|spacing|3"}},"fontSize":"sm","fontFamily":"jakarta","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
			<!-- wp:navigation-link {"label":"Work","url":"#work","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"Studio","url":"#studio","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"Process","url":"#process","kind":"custom","isTopLevelLink":true} /-->
			<!-- wp:navigation-link {"label":"Contact","url":"#contact","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"kern-studio-footer__rule is-style-wide","backgroundColor":"studio-ink","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|6"}}}} -->
	<hr class="wp-block-separator has-text-color has-studio-ink-color has-alpha-channel-opacity has-studio-ink-background-color has-background kern-studio-footer__rule is-style-wide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--6)"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"className":"kern-studio-footer__copyright","style":{"typography":{"fontWeight":"400","letterSpacing":"0.02em","lineHeight":"1.5"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"studio-mid","fontSize":"xs","fontFamily":"jakarta"} -->
	<p class="kern-studio-footer__copyright has-studio-mid-color has-text-color has-jakarta-font-family has-xs-font-size" style="margin-top:0;margin-bottom:0;font-weight:400;letter-spacing:0.02em;line-height:1.5">&copy; 2026 Kern Type Studio. All letterforms drawn in-house.</p>
	<!-- /wp:paragraph -->

</footer>
<!-- /wp:group -->
