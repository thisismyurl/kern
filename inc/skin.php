<?php
/**
 * [SKIN] The skin layer — the one PHP file the `colophon` CLI never overwrites.
 *
 * Kern is a literary/culture-magazine skin built for multi-contributor
 * editorial operations: poetry journals, small presses, university reviews,
 * culture and arts magazines. Everything here is theme-specific: image crops
 * sized for a lead-story hero and a four-column story grid, the block styles
 * that back the "rubric" category label and the custom drop cap, the pattern
 * categories that group Kern's editorial patterns in the inserter, and the
 * font preload for the Largest Contentful Paint element.
 *
 * @package kern
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register this theme's image crop sizes.
 *
 * Two crops carry Kern's two dominant layouts: a wide duotone-ready hero for
 * the homepage lead story (matches the 16:9 hero the reference layout uses
 * for its lead image) and a tighter 3:2 card crop for the story grid, so
 * thumbnails in a four-column row stay visually level regardless of the
 * source photo's native aspect ratio.
 *
 * Hooked on after_setup_theme (not the core setup() function) so a re-skin
 * changes crops here without touching inc/setup.php.
 */
function kern_skin_image_sizes(): void {
	add_image_size( 'kern-hero', 1600, 1000, true ); // Lead-story hero, 8:5.
	add_image_size( 'kern-card', 640, 800, true );   // Story-grid card, 4:5 portrait — matches editorial contact-sheet proportions.

	/**
	 * Fires after the theme registers its image crop sizes.
	 *
	 * Companion plugins and re-skins hook here to add their own sizes
	 * without editing this file.
	 *
	 * @since 1.6150
	 */
	do_action( KERN_SLUG . '/register_image_sizes' );
}
add_action( 'after_setup_theme', 'kern_skin_image_sizes' );

/**
 * Expose Kern's image sizes in the block editor media library / image-size
 * dropdowns, so an editor picking a crop for a manually placed image sees
 * human labels instead of the raw size slug.
 *
 * @param array<string, string> $sizes Existing size labels.
 * @return array<string, string>
 */
function kern_skin_image_size_names( array $sizes ): array {
	return array_merge(
		$sizes,
		array(
			'kern-hero' => esc_html__( 'Kern Hero (1600×1000)', 'kern' ),
			'kern-card' => esc_html__( 'Kern Card (640×800)', 'kern' ),
		)
	);
}
add_filter( 'image_size_names_choose', 'kern_skin_image_size_names' );

/**
 * Register this theme's block styles (the is-style-{name} options in the editor).
 *
 * Three styles carry Kern's editorial vocabulary:
 *
 * - kn-rubric: the small, tracked, uppercase category label set above a
 *   headline — "rubric" is the print term for exactly this device, dating to
 *   the days a section heading was set in red ink. It is the one place the
 *   theme's single accent colour is allowed to appear on running text.
 * - kn-dropcap: Kern's own drop cap, keyed to Newsreader's cap-height
 *   proportions. Core's drop cap is switched off in theme.json
 *   (typography.dropCap = false) because core's rule ships unlayered and this
 *   theme's CSS lives in cascade layers — a theme rule could never reliably
 *   win against it, so there is exactly one drop-cap control, not two that
 *   silently fight.
 * - kn-standfirst: the larger, lighter-weight lede paragraph directly under a
 *   headline (called a "standfirst" or "dek" in magazine practice) — distinct
 *   from body copy, and distinct from a pull quote.
 *
 * The CSS for each lives in assets/css/skin.css @layer blocks.
 */
function kern_skin_block_styles(): void {
	// Rubric applies to a standalone paragraph (a section-header label) and
	// to the post-excerpt block used as a category tag in a compact layout,
	// so it is registered against both — an editor sees the toggle in
	// whichever block they are actually holding.
	foreach ( array( 'core/paragraph', 'core/post-excerpt' ) as $block ) {
		register_block_style(
			$block,
			array(
				'name'  => 'kn-rubric',
				'label' => esc_html__( 'Rubric (category label)', 'kern' ),
			)
		);
	}

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'kn-dropcap',
			'label' => esc_html__( 'Drop Cap', 'kern' ),
		)
	);

	// Standfirst applies to a manually written paragraph and to the
	// post-excerpt block, which is how the hero and single-article
	// templates render the dek from the post's own excerpt field.
	foreach ( array( 'core/paragraph', 'core/post-excerpt' ) as $block ) {
		register_block_style(
			$block,
			array(
				'name'  => 'kn-standfirst',
				'label' => esc_html__( 'Standfirst', 'kern' ),
			)
		);
	}

	/**
	 * Fires after the theme registers its block styles.
	 *
	 * Hook here to add is-style-* options to any block without touching
	 * this file. The CSS for each style lives in assets/css/skin.css.
	 *
	 * @since 1.6150
	 */
	do_action( KERN_SLUG . '/register_block_styles' );
}
add_action( 'init', 'kern_skin_block_styles' );

/**
 * Register this theme's pattern categories.
 *
 * Prefixed with the theme's own slug so a theme installed beside its
 * siblings never collides. Pattern files in /patterns/*.php declare which
 * category they slot into.
 */
function kern_skin_pattern_categories(): void {
	$categories = array(
		KERN_SLUG . '-layouts'   => array(
			'label'       => esc_html__( 'Kern: Layouts', 'kern' ),
			'description' => esc_html__( 'Lead-story hero and story-grid patterns for section and home pages.', 'kern' ),
		),
		KERN_SLUG . '-editorial' => array(
			'label'       => esc_html__( 'Kern: Editorial', 'kern' ),
			'description' => esc_html__( 'Pull quotes, section dividers and in-article patterns.', 'kern' ),
		),
		KERN_SLUG . '-masthead'  => array(
			'label'       => esc_html__( 'Kern: Masthead', 'kern' ),
			'description' => esc_html__( 'Contributor bylines and the staff masthead page.', 'kern' ),
		),
		KERN_SLUG . '-cta'       => array(
			'label'       => esc_html__( 'Kern: Calls to Action', 'kern' ),
			'description' => esc_html__( 'Subscribe and promotional patterns.', 'kern' ),
		),
	);

	foreach ( $categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}

	/**
	 * Fires after the theme registers its pattern categories.
	 *
	 * Hook here to register additional categories alongside the theme's
	 * own, so all categories appear grouped in the block inserter.
	 *
	 * @since 1.6150
	 */
	do_action( KERN_SLUG . '/register_pattern_categories' );
}
add_action( 'init', 'kern_skin_pattern_categories' );

/*
 * Preload the LCP font — Newsreader is the display serif used for the
 * masthead wordmark and every headline, so its normal-weight file is the
 * Largest Contentful Paint candidate on every template. Only the variable
 * (normal-style) file is preloaded; the italic file loads on demand only
 * where a standfirst or pull quote actually needs it.
 */
add_filter(
	KERN_SLUG . '/preload_fonts',
	static function ( array $fonts ): array {
		$fonts[] = 'assets/fonts/newsreader/newsreader-variable.woff2';
		return $fonts;
	}
);
