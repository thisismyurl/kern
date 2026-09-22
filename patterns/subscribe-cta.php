<?php
/**
 * Title: Subscribe CTA
 * Slug: kern/subscribe-cta
 * Categories: kern-cta
 * Viewport Width: 1100
 * Inserter: true
 *
 * A single ink band, centred, with one editorial sentence and one button —
 * the theme's one moment of true black-on-white inversion. Deliberately
 * plain: no email-capture markup is bundled here (a theme registering its
 * own form handler is out of scope — see the "Bundled plugin territory"
 * refusal in the design doctrine), so the button links out to wherever the
 * magazine actually processes subscriptions.
 *
 * @package kern
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"tagName":"div","className":"kn-section--ink kn-section--tight","layout":{"type":"constrained","contentSize":"600px","justifyContent":"center"}} -->
<div class="wp-block-group kn-section--ink kn-section--tight">

	<!-- wp:paragraph {"className":"is-style-kn-rubric","align":"center"} -->
	<p class="is-style-kn-rubric has-text-align-center"><?php esc_html_e( 'Four Issues a Year', 'kern' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"textAlign":"center","fontSize":"lg","style":{"color":{"text":"var:preset|color|paper"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-paper-color has-text-color has-lg-font-size"><?php esc_html_e( 'Print, mailed quarterly. No app, no algorithm, no ads.', 'kern' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"paper","textColor":"ink-deep","style":{"border":{"radius":"0px"}}} -->
		<div class="wp-block-button">
			<a class="wp-block-button__link has-ink-deep-color has-paper-background-color has-text-color has-background wp-element-button" href="#" style="border-radius:0"><?php esc_html_e( 'Subscribe', 'kern' ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
