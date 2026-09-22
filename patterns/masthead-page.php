<?php
/**
 * Title: Masthead Page
 * Slug: kern/masthead-page
 * Categories: kern-masthead
 * Viewport Width: 1100
 * Inserter: true
 *
 * KERN'S SIGNATURE PATTERN. Every literary and culture magazine that has
 * ever gone to print carries a masthead page — a role, then a name, run
 * down the second or third page, in the small caps a designer reserves
 * for exactly this list. No theme in the WordPress.org directory ships a
 * pattern built for it, because it is not a "team" section (that is a
 * SaaS-marketing convention: photo, name, job title, three social icons)
 * — it is a colophon: who edits what, who set the type, who reads the
 * unsolicited manuscripts. An editor who has actually run a magazine
 * recognises the difference immediately.
 *
 * Each line reads "Role — Name", the role set bold, because that is the
 * order an actual masthead runs in: the position matters before the person
 * filling it does. Two role groups (Editorial, then Contributing Writers)
 * demonstrate how a masthead usually separates the standing staff from
 * the rotating cast credited "in this issue."
 *
 * Insert this on its own page (Pages → Add New → "Masthead") and link it
 * from the footer's "Masthead & contributors" item.
 *
 * @package kern
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:group {"className":"kn-masthead-page","layout":{"type":"constrained","contentSize":"720px"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
<div class="wp-block-group kn-masthead-page" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">

	<!-- wp:paragraph {"className":"is-style-kn-rubric"} -->
	<p class="is-style-kn-rubric"><?php esc_html_e( 'Colophon', 'kern' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1,"fontSize":"xl"} -->
	<h1 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Masthead', 'kern' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"md","className":"is-style-kn-standfirst","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<p class="has-md-font-size is-style-kn-standfirst" style="margin-bottom:var(--wp--preset--spacing--10)"><?php esc_html_e( 'Founded in a basement print shop and run, since, by whoever answered the phone.', 'kern' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"fontSize":"sm","fontFamily":"jakarta","style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}},"textColor":"ink-muted"} -->
	<h2 class="wp-block-heading has-jakarta-font-family has-sm-font-size has-ink-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--4);letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'Editorial', 'kern' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"kn-masthead-page__roles","style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group kn-masthead-page__roles">

		<!-- wp:paragraph -->
		<p><strong><?php esc_html_e( 'Editor-in-Chief', 'kern' ); ?></strong> — <?php esc_html_e( 'Priya Ostrander Lund', 'kern' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong><?php esc_html_e( 'Fiction Editor', 'kern' ); ?></strong> — <?php esc_html_e( 'Desmond Achterberg', 'kern' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong><?php esc_html_e( 'Poetry Editor', 'kern' ); ?></strong> — <?php esc_html_e( 'Naomi Achebe-Voss', 'kern' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong><?php esc_html_e( 'Essays &amp; Criticism Editor', 'kern' ); ?></strong> — <?php esc_html_e( 'Régine Tanaka-Furst', 'kern' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong><?php esc_html_e( 'Art Director', 'kern' ); ?></strong> — <?php esc_html_e( 'Owen Marchetti', 'kern' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><strong><?php esc_html_e( 'Managing Editor', 'kern' ); ?></strong> — <?php esc_html_e( 'Harriet Solberg-Nkemelu', 'kern' ); ?></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|8"} -->
	<div style="height:var(--wp--preset--spacing--8)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"level":2,"fontSize":"sm","fontFamily":"jakarta","style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}},"textColor":"ink-muted"} -->
	<h2 class="wp-block-heading has-jakarta-font-family has-sm-font-size has-ink-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--4);letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'Contributing Writers, This Issue', 'kern' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"base"} -->
	<p class="has-base-font-size"><?php esc_html_e( 'Danielle Okonkwo-Reyes · Mathias Fuentes-Lindqvist · Bram Vosloo · Ingrid Castellano-Marsh · Tobias Ekwueme · June Halloran-Petit', 'kern' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
	<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:separator {"style":{"color":{"text":"var:preset|color|line-strong"}}} -->
	<hr class="wp-block-separator has-text-color has-alpha-channel-opacity" style="color:var(--wp--preset--color--line-strong)"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"fontSize":"sm","style":{"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} -->
	<p class="has-sm-font-size" style="color:var(--wp--preset--color--ink-muted);margin-top:var(--wp--preset--spacing--4)"><?php esc_html_e( 'Printed on a schedule we mostly keep. Manuscripts, queries and complaints all go to the same inbox.', 'kern' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
