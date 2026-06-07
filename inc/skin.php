<?php
/**
 * [SKIN] The skin layer — the one PHP file `colophon sync` never overwrites.
 *
 * Kern's PHP-side personality: the editorial image crops, the LCP font preload
 * (Fraunces paints every h1, the largest glyph on the front page), the block
 * styles the patterns depend on, and the pattern category registrations.
 *
 * The [CORE] inc/ files stay portable because none of Kern's specifics leak
 * into them. That separation is the whole point of the CORE/SKIN split.
 *
 * Pillar 8 (Kodawari): the LCP preload for Fraunces is not obvious — it's the
 * result of profiling which font is the actual LCP element. Not every theme
 * preloads every font; this one preloads the right one.
 * Pillar 9 (Archaeological Records): [SKIN] tag marks what belongs to Kern.
 *
 * @package kern
 */

namespace Kern;

defined( 'ABSPATH' ) || exit;
// Opt this theme into GitHub-release self-updates (see inc/github-updater.php).
add_filter( 'kern/github_updater_repo', static function (): string {{
	return 'thisismyurl/kern';
}} );

/**
 * Register Kern's image crop sizes.
 *
 * 16:9 for the case-study hero; 1:1 for the mark/symbol presentation (a square
 * crop puts the mark dead-center with equal breathing room on all sides).
 * The 1:1 crop is Kern-specific — it matches the mark-presentation pattern.
 */
function skin_image_sizes(): void {
	add_image_size( 'kern-hero', 1440, 810, true );  // 16:9 case-study opener.
	add_image_size( 'kern-mark', 800, 800, true );   // 1:1 mark/symbol presentation.
	add_image_size( 'kern-card', 720, 480, true );   // 3:2 works directory thumbnail.
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\skin_image_sizes' );

/**
 * Preload Fraunces — the LCP-critical font on every Kern page.
 *
 * Fraunces renders every h1 (the largest-paint element in the specimen-director
 * hero). The variable upright file covers every weight used on the critical path;
 * the italic variant is loaded lazily as a decorative accent.
 *
 * Pillar 8 (Kodawari): preloading the right font, not all fonts.
 */
add_filter(
	'kern/preload_fonts',
	static function ( array $fonts ): array {
		$fonts[] = 'assets/fonts/fraunces/fraunces-variable.woff2';
		return $fonts;
	}
);

/**
 * Register Kern's block styles.
 *
 * Block styles are the is-style-{name} vocabulary that patterns and editors
 * can apply. The CSS treatment lives in skin.css @layer components; the
 * registration here is the editor-facing handle. The CSS carries the weight;
 * these registrations carry the label.
 *
 * Pillar 7 (High Agency): every block style is usable by an editor without
 * developer help. The label is plain English; the treatment is self-evident
 * in the editor preview.
 */
function skin_block_styles(): void {

	// [SKIN] Paragraph as an eyebrow label — small caps, tracked, muted colour.
	// Used above h2 headings in pattern section headers.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'kern-eyebrow',
			'label' => __( 'Eyebrow label', 'kern' ),
		)
	);

	// [SKIN] Paragraph as a type-specimen annotation — small, tracked, studio-mid.
	// Used in the typeface-pairing and specimen patterns for design notes.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'kern-annotation',
			'label' => __( 'Specimen annotation', 'kern' ),
		)
	);

	// [SKIN] Group as a works-directory entry — full-width rule above, generous
	// vertical space. The is-style class is applied per-entry in the pattern;
	// the hover treatment (studio-press accent) lives in skin.css.
	register_block_style(
		'core/group',
		array(
			'name'  => 'kern-directory-entry',
			'label' => __( 'Directory entry', 'kern' ),
		)
	);

	// [SKIN] Group as a mark-presentation container — centered, generous padding,
	// white ground. Used in the mark/symbol pattern to create the "specimen card"
	// around a logomark or symbol.
	register_block_style(
		'core/group',
		array(
			'name'  => 'kern-mark-card',
			'label' => __( 'Mark card', 'kern' ),
		)
	);

	// [SKIN] Heading as a display specimen — Fraunces at maximum weight (900),
	// the "wow" moment in the typeface-pairing pattern.
	register_block_style(
		'core/heading',
		array(
			'name'  => 'kern-specimen-display',
			'label' => __( 'Specimen display', 'kern' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\skin_block_styles' );

/**
 * Register Kern's block pattern categories.
 *
 * Patterns auto-register from the patterns/ directory (WordPress 6.0+). These
 * category registrations give them a home in the pattern library that reads as
 * "Kern: …" rather than appearing under the generic Uncategorised bucket.
 */
function skin_pattern_categories(): void {

	register_block_pattern_category(
		'kern-studio',
		array(
			'label'       => __( 'Kern: Studio', 'kern' ),
			'description' => __( 'Studio identity and homepage patterns.', 'kern' ),
		)
	);

	register_block_pattern_category(
		'kern-work',
		array(
			'label'       => __( 'Kern: Work', 'kern' ),
			'description' => __( 'Portfolio, case studies, and works-directory patterns.', 'kern' ),
		)
	);

	register_block_pattern_category(
		'kern-type',
		array(
			'label'       => __( 'Kern: Type', 'kern' ),
			'description' => __( 'Type-specimen and typeface-showcase patterns — Kern\'s signature feature.', 'kern' ),
		)
	);

	register_block_pattern_category(
		'kern-contact',
		array(
			'label'       => __( 'Kern: Contact', 'kern' ),
			'description' => __( 'Enquiry and brief-form patterns.', 'kern' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\skin_pattern_categories' );
