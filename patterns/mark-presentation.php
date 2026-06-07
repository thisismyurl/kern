<?php
/**
 * Title: Mark Presentation
 * Slug: kern/mark-presentation
 * Categories: kern-work
 * Description: A centred 1:1 aspect-ratio image on press-tint ground for logo mark or brand symbol presentation.
 * Inserter: true
 *
 * [SKIN] The project mark / logo presentation pattern.
 *
 * A centred, 1:1 aspect-ratio image block on a press-tint background —
 * used for presenting a logo mark, brand symbol, or monogram at rest.
 * The `is-style-kern-mark-card` block style handles the aspect-ratio
 * and centering via skin.css.
 *
 * The surrounding band (`kern-band--press-tint`) provides a controlled
 * viewing environment — the mark is always seen against the same ground.
 * No surprise backgrounds. No content bleed.
 *
 * Teaching note: this is what block styles unlock in FSE. The image block
 * itself knows nothing about 1:1 aspect ratios or centered presentation —
 * that's all in the `.is-style-kern-mark-card` CSS rule registered in skin.php.
 * This is the separation of concerns that makes FSE powerful: structure lives
 * in the template/pattern, presentation lives in the block style, both are
 * swappable without touching the other.
 */
?>
<!-- wp:group {"className":"kern-section kern-band--press-tint","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group kern-section kern-band--press-tint" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"},"border":{"bottom":{"color":"var:preset|color|studio-press-tint","style":"solid","width":"1px"}}}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid var(--wp--preset--color--studio-press-tint)">
		<!-- wp:heading {"level":2,"fontSize":"sm","className":"is-style-kern-eyebrow","style":{"color":{"text":"var:preset|color|studio-press"}}} -->
		<h2 class="wp-block-heading has-sm-font-size is-style-kern-eyebrow has-studio-press-color has-text-color">The Mark</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- Mark image: 1:1 aspect ratio, centered, no border-radius (skin.css) -->
	<!-- Replace this placeholder with the actual mark image via the block editor. -->
	<!-- wp:image {"className":"is-style-kern-mark-card","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"sizeSlug":"kern-mark"} -->
	<figure class="wp-block-image is-style-kern-mark-card" style="margin-top:var(--wp--preset--spacing--10)">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-mark.svg" alt="<?php esc_attr_e( 'Your studio mark — replace this image', 'kern' ); ?>" />
		<!-- wp:caption -->
		<figcaption class="wp-element-caption"><?php esc_html_e( 'Studio mark — replace with your mark image', 'kern' ); ?></figcaption>
		<!-- /wp:caption -->
	</figure>
	<!-- /wp:image -->

</div>
<!-- /wp:group -->
