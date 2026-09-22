<?php
/**
 * Title: Section Header
 * Slug: kern/section-header
 * Categories: kern-editorial
 * Viewport Width: 1100
 * Inserter: true
 *
 * A rubric label, a black rule, and an optional "View all" link — the
 * divider that opens a new section of the homepage or archive ("Fiction",
 * "Poetry", "Interviews" …) the way a printed magazine breaks each
 * department with its own running head.
 *
 * @package kern
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"className":"kn-section-header","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"bottom"},"style":{"border":{"bottom":{"color":"var:preset|color|line-strong","width":"2px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|3"},"margin":{"bottom":"var:preset|spacing|8"}}}} -->
<div class="wp-block-group kn-section-header" style="border-bottom-color:var(--wp--preset--color--line-strong);border-bottom-width:2px;margin-bottom:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--3)">

	<!-- wp:heading {"level":2,"fontSize":"lg"} -->
	<h2 class="wp-block-heading has-lg-font-size"><?php esc_html_e( 'Fiction', 'kern' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"xs","fontFamily":"jakarta","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}}} -->
	<p class="has-jakarta-font-family has-xs-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><a href="#"><?php esc_html_e( 'View all →', 'kern' ); ?></a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
