<?php
/**
 * Title: Pull Quote Feature
 * Slug: kern/pull-quote-feature
 * Categories: kern-editorial
 * Viewport Width: 900
 * Inserter: true
 *
 * A full-bleed-feeling standout quote for the middle of a long piece —
 * bracketed by true-black rules, set in Newsreader italic, with the
 * attribution in tracked Plus Jakarta Sans caps beneath it. Insert this
 * inside a post's content wherever the piece earns a moment of pause.
 *
 * The quoted line is placeholder editorial copy the writer replaces with
 * an actual sentence from their own piece — it is written as real prose,
 * not lorem ipsum, so the pattern reads correctly before it is edited.
 *
 * @package kern
 */

defined( 'ABSPATH' ) || exit;
?>
<!-- wp:pullquote {"align":"wide"} -->
<figure class="wp-block-pullquote alignwide">
	<blockquote>
		<p><?php esc_html_e( 'The poem does not resolve the argument. It just makes the argument bearable to sit inside a little longer.', 'kern' ); ?></p>
		<cite><?php esc_html_e( 'From the piece above', 'kern' ); ?></cite>
	</blockquote>
</figure>
<!-- /wp:pullquote -->
