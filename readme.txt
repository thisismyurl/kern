=== Kern ===

Contributors: thisismyurl
Tags: portfolio, blog, one-column, custom-colors, custom-logo, custom-menu, editor-style, featured-images, full-site-editing, block-patterns, accessibility-ready, rtl-language-support, translation-ready, wide-blocks
Requires at least: 6.7
Tested up to: 6.8
Requires PHP: 8.0
Stable tag: 1.6165.1210
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A typographic FSE theme for type studios, brand consultancies, and independent designers. The studio name at display scale IS the hero.

== Description ==

Kern ships a working type specimen as a publishable WordPress page. The signature kern/typeface-pairing pattern documents the theme's own font system — each face at its intended size, weight, and tracking, with the design rationale as a caption — and reads the live CSS custom properties, so it always reflects the real type system rather than a screenshot. Nothing else in the directory does this. It is the page a type foundry would build by hand; Kern bakes it into the pattern library.

Around that hook, Kern is a typography-first theme with a genuine point of view. It pairs Fraunces (a high-contrast serif) with Plus Jakarta Sans (a humanist grotesque) and lets that pairing carry the whole design — no hero photograph, no decorative mesh gradient. The front page presents the studio name at display scale in Fraunces. The type does the work.

Built for type studios and brand consultancies. The works directory presents portfolio entries as a typographic index (title + year), not a card grid. Five style variations — Blueprint, Editorial, Foundry Dark, Pressroom, and Proof Sheet — recolour the same structure in one click, so the range from drafting-table blue to letterpress black-and-red is built in, not a paid add-on.

Built for accessibility — a keyboard-reachable skip link, visible focus outlines, a logical heading order (one h1 per template), semantic landmarks (header, main, footer), and a reduce-motion-aware design. We build to the WCAG 2.2 AA bar; your own copy, images, and colour choices determine the final audited result. Core Web Vitals optimised, self-hosted SIL OFL fonts, RTL-ready via CSS logical properties, zero plugin dependencies.

**Signature feature:** kern/typeface-pairing — a functional type specimen pattern that documents the theme's font pairing as a publishable WordPress page.

== Typography ==

Kern's type system is the design, so its choices are deliberate rather than
defaults. The display face is Fraunces, a high-contrast serif with a variable
optical-size axis: headings set `font-optical-sizing: auto`, so the largest
sizes pick up the sharper, higher-contrast cut Fraunces draws for display while
small text stays sturdy. Display headings run at weight 300 — light, not bold —
because at the display clamp (up to 8rem) a light weight reads as confident
restraint where a heavy weight would shout; the maximum-weight 900 is held in
reserve for the one "specimen display" moment in the typeface-pairing pattern,
so weight contrast lands where it is designed to. Body and UI text is Plus
Jakarta Sans, a humanist grotesque, set at weight 350 for an even, unfussy
reading colour beside the serif. Tracking is tuned per role: negative at display
scale (−0.02em on h1, tightening to −0.03em on the 900-weight specimen) to close
the gaps large type opens up, and positive on the small Jakarta labels (0.1em on
eyebrows, up to 0.14em on the smallest uppercase caption) so tracked small caps
stay legible. Vertical rhythm follows from line-height that loosens as size
drops: 1.05 on the display headline, widening to 1.7 on body prose — tight
headlines, breathable paragraphs. The size scale is a fluid `clamp()` ramp from
0.6875rem to 8rem that interpolates with the viewport, so the proportional
relationships between steps hold from phone to desktop instead of snapping at
breakpoints. Every one of these values lives in theme.json, so the Styles panel
shows the real system and editors can retune it without leaving the editor.

== Installation ==

1. In your WordPress dashboard, go to Appearance → Themes → Add New.
2. Upload kern.zip or search for "Kern" in the theme directory.
3. Activate the theme.
4. Go to Appearance → Editor to customise templates and patterns.
5. Set a static front page at Settings → Reading if desired.

Fonts are bundled — Fraunces and Plus Jakarta Sans are included as WOFF2 files in assets/fonts/ and loaded via theme.json. No downloads required.

== Frequently Asked Questions ==

= Where's the hero image? =

The studio name at display scale is the hero. This is a deliberate design decision — type studios lead with type, not photography. The specimen-director pattern makes this explicit.

= How do I add portfolio items? =

Publish posts — they'll appear automatically in the works directory on the front page. Categories become the discipline labels beside each title.

= Can I use a different font? =

Yes — theme.json is the font source of truth. Register your font there and update inc/skin.php to preload it. All font files must be self-hosted and SIL OFL 1.1 or GPL-compatible for the WP.org version.

= How do I use the typeface pairing specimen? =

Go to Pages → Add New, insert the "Typeface Pairing Specimen" pattern, and publish. It reads the theme's actual CSS custom properties, so it always reflects the live type system.

= Where is the contact form? =

The kern/brief pattern contains an HTML form stub. Connect it to a form plugin of your choice (Contact Form 7, Gravity Forms, Jetpack Forms) — the CSS treatment is on the wrapper, not the form engine.

== Compatibility ==

WordPress 6.7+ recommended. The footer copyright and credit lines use block
bindings, which require WordPress 6.5+; on older WordPress the footer simply
renders empty for those lines and the rest of the theme is unaffected.

== Accessibility ==

Kern is built to the WCAG 2.2 AA bar. Shipped, verifiable in the code:

* A keyboard-reachable "Skip to content" link as the first focusable element
  (assets/css/core/base.css positions it off-screen until focused).
* Visible focus outlines on interactive elements; no `outline: none` without a
  replacement.
* One explicit h1 per template (`"level":1` on every heading and query-title
  block), in logical heading order.
* Semantic landmarks: header, a single `<main id="main-content">`, and footer.
* Motion respects `prefers-reduced-motion`.

Contrast is measured by WCAG relative luminance, on the default palette (the
root theme.json, the state before any style variation is selected): page text
(studio-black, #1a1a1a) on the page ground (#f5f3ee) is 15.69:1, and body prose
(studio-ink, #2e2e2e) on the same ground is 12.25:1 — both clear WCAG 2.2 AAA
(7:1) for normal text, not merely AA (4.5:1). All five style variations
(Blueprint, Editorial, Foundry Dark, Pressroom, Proof Sheet) are tuned to clear
AA on every text pair, including the dark bands — the press-coloured footer, the
studio-black footer pattern, and the press-tinted specimen band — where muted
greys are darkened or lightened per variation to hold the line. Foundry Dark
inverts to light type on a near-black ground and keeps body prose at 14.99:1.
The hairline rules and the oversized ghosted "404" numeral are decorative and
exempt from text contrast; the 404 numeral is nonetheless set so it clears the
3:1 large-text floor in every variation.

These are theme-level guarantees. The final audited result for a live site also
depends on the editor's own copy, image alt text, and colour choices, which the
theme cannot control.

== Right-to-Left (RTL) ==

Kern lays out with CSS logical properties (margin-inline, padding-inline,
inset-inline) so WordPress 6.7+ flips block-level direction automatically for
RTL locales. Caveat: a small number of physical-property rules remain by design
and are direction-neutral — the off-screen skip-link position in
assets/css/core/base.css, the print stylesheet, and the symmetric left/right
root padding in assets/css/skin.css. If RTL rendering looks wrong, confirm you
are on WordPress 6.7+ and that your browser supports CSS logical properties.

== Architecture ==

Kern uses a CORE/SKIN split. The [CORE] files in inc/ (setup, assets, bindings,
admin, github-updater) are portable infrastructure shared across the Colophon
theme family — they carry no theme-specific strings or styling, so they can be
synced between sibling themes without drift. The [SKIN] file (inc/skin.php) and
the CSS in assets/css/skin.css hold everything that makes Kern *Kern*: the font
preload, the image crops, the block-style vocabulary, and the pattern categories.
A child theme or a sibling can replace the skin without touching the core, and a
core update never overwrites the personality layer. Every file carries a purpose
header documenting which side of the split it lives on.

== Style Variations ==

Kern ships five style variations (Appearance → Editor → Styles → Browse styles).
Each is a complete recolour and type-tone of the same structure — switch with one
click, no template edits:

* **Blueprint** — cool greys and a blue press accent; the default drafting-table mood.
* **Editorial** — warm paper and ink; reads like a printed quarterly.
* **Foundry Dark** — light type on a near-black ground for type-specimen drama.
* **Pressroom** — high-contrast black-and-red, letterpress-inspired.
* **Proof Sheet** — muted, neutral, low-chroma; lets sample type carry the colour.

The project's preview harness (in the source repository) renders every pattern and
template across desktop and mobile, plus colour-variant captures, so the theme's
full range is visible without installing it on a live site.

== Developer Guide ==

Kern is built on Colophon, a small documented core (the [CORE] files in inc/).
The theme exposes seven public filters and one action, all prefixed `kern/`.
Every example below uses PHP 7.4-compatible syntax (classic closures, not arrow
functions), so it runs on every PHP version the theme supports.

**Hooks and filters reference**

Each row lists the hook, what it changes, its default, and the function and file
it fires from. Runnable PHP 7.4-compatible examples follow the table.

| Hook | Type | What it changes | Default | Fires from |
|------|------|-----------------|---------|------------|
| `kern/setup` | action | Runs after the theme registers its supports and menus — add image sizes, supports, or menus without editing the CORE setup file. | — (no args) | `setup()`, inc/setup.php |
| `kern/preload_fonts` | filter | Theme-root-relative WOFF2 paths to `<link rel=preload>` in the head. Skin adds Fraunces. | `array()` (empty) | `preload_fonts()`, inc/assets.php |
| `kern/copyright_date_format` | filter | PHP date-format string for the footer copyright year. Return a literal string (e.g. `2022–2026`) for a fixed range. | `'Y'` (four-digit year) | `get_copyright_value()`, inc/bindings.php |
| `kern/copyright_text` | filter | The whole composed footer copyright sentence. | `© {year} {Site Title}. All rights reserved.` | `get_copyright_value()`, inc/bindings.php |
| `kern/footer_credit` | filter | The footer "Built with the {Theme} theme." line. Return `''` to remove it. Output is wp_kses'd to a minimal anchor allow-list. | `Built with the {Theme} theme.` | `get_footer_credit_value()`, inc/bindings.php |
| `kern/onboarding_capability` | filter | The capability required to see the Get started page and welcome notice. | `'edit_theme_options'` | `get_onboarding_capability()`, inc/admin.php |
| `kern/get_started_content` | filter | The Get started admin page content array (lead, steps, optimize, credit, developers). | the built-in default copy | `get_started_content()`, inc/admin.php |
| `kern/developer_guide_url` | filter | The URL of the "developer guide" link on the Get started page. | `https://thisismyurl.com/colophon` | `get_started_content()`, inc/admin.php |

(One further filter, `kern/github_updater_repo`, exists only in the GitHub-
distributed build. inc/github-updater.php is stripped from the WordPress.org
package via .distignore, so that filter is not present in the directory release.)

**Examples**

	// Preload an extra WOFF2 on the critical path (theme-root-relative path).
	add_filter( 'kern/preload_fonts', function ( $fonts ) {
		$fonts[] = 'assets/fonts/plus-jakarta-sans/plus-jakarta-sans-variable.woff2';
		return $fonts;
	} );

	// Copyright as a year range instead of a single year.
	add_filter( 'kern/copyright_date_format', function () {
		return '2022–' . gmdate( 'Y' );
	} );

	// Replace the whole copyright sentence.
	add_filter( 'kern/copyright_text', function ( $line ) {
		return '© ' . gmdate( 'Y' ) . ' My Studio Ltd.';
	} );

	// Remove the footer credit entirely.
	add_filter( 'kern/footer_credit', '__return_empty_string' );

	// Restrict onboarding to administrators on a multi-author site.
	add_filter( 'kern/onboarding_capability', function () {
		return 'manage_options';
	} );

	// Point the Get started "developer guide" link at your own docs.
	add_filter( 'kern/developer_guide_url', function ( $url ) {
		return 'https://example.com/my-theme-docs';
	} );

	// Register a sibling-theme image size on the shared setup action.
	add_action( 'kern/setup', function () {
		add_image_size( 'studio-wide', 1920, 720, true );
	} );

**Child theme example**

Because the personality lives in the [SKIN] layer, a child theme can re-tone Kern
without touching the core. Create a folder with two files:

style.css:

	/*
	Theme Name: Kern Atelier
	Template: kern
	Version: 1.0.0
	*/

functions.php:

	<?php
	// Drop the footer credit and fix the copyright to a studio name.
	add_filter( 'kern/footer_credit', '__return_empty_string' );

	add_filter( 'kern/copyright_text', function () {
		return '© ' . gmdate( 'Y' ) . ' Atelier Studio Ltd.';
	} );

Activate the child theme and the parent's templates, patterns, and CORE files all
load unchanged; only the two filtered lines differ. Add a child styles/ variation
or override assets/css/skin.css to re-skin further — the CORE files never need a
copy, so a parent update flows straight through.

**Build your own theme on the core**

The CORE/SKIN split is meant to be reused, not just admired. The [CORE] files in
inc/ — setup, assets, bindings, and admin — carry no theme-specific strings or
styling; they are the portable floor every theme in the Colophon line stands on.
To start a new sibling theme rather than a child:

1. Copy the inc/ CORE files unchanged. They re-prefix from one place —
   inc/bootstrap.php holds the namespace and the SLUG constant, and every asset
   handle, hook name, and binding source derives from those two values. Change
   them once and the whole theme re-prefixes; there is no second list of callback
   strings to keep in sync.
2. Write your own inc/skin.php (the [SKIN] layer): your font preloads, image
   crops, block styles, and pattern categories. This is the one PHP file the
   core never overwrites.
3. Supply your own theme.json tokens, styles/ variations, templates/, and
   patterns/. The CORE bindings already feed a living copyright year and a
   filterable footer credit into any footer part that binds to them.

The result is a theme that inherits Colophon's accessibility scaffolding, i18n
discipline, and block-bindings plumbing for free, while owning every line of its
own personality. Kern is the worked example.

== Changelog ==

= 1.6165.1210 =
Accessibility (WCAG 2.2 AA contrast):
* Audited every text/background pair across the default palette and all five
  style variations by WCAG relative luminance. Fixed the pairs that fell below
  4.5:1 (normal text) without changing the typographic design:
  * The eyebrow block style forced studio-mid with !important, which overrode the
    inline colour the patterns set on the dark bands — so eyebrows rendered
    studio-mid on the press band (down to 1.03:1). Added band-scoped overrides in
    skin.css: studio-rule on the press band, studio-press on the press-tint band
    (>=4.84:1 across all variations).
  * The studio-footer pattern copyright line was studio-mid on studio-black
    (3.08–4.36:1). Changed to studio-rule (>=11:1 on the dark grounds).
  * Pressroom and Foundry Dark studio-mid failed on their grounds/paper (down to
    3.67:1) for post-date, author, and the contact-cta pitch. Darkened Pressroom
    studio-mid to #6A5640 and lightened Foundry Dark studio-mid to #9A9080.
  * Proof Sheet studio-press failed on the press-tint band and against studio-rule
    on the press band (down to 3.71:1). Darkened it to #2F5783.
* The decorative oversized "404" numeral moved from studio-rule (≈1.3:1, all but
  invisible) to studio-mid, clearing the 3:1 large-text floor in every variation
  while staying a quiet ghosted backdrop.

Internationalization:
* Removed the hardcoded English "← Back to start" label from the 404 home-link so
  core renders its own localized "Home" string — no untranslatable visitor prose
  remains in any error state.

Documentation:
* Replaced the prose filter list in the Developer Guide with a consolidated
  hooks-and-filters reference table: every public hook with its type, effect,
  default, and originating function/file, plus runnable PHP 7.4-compatible
  examples. Documents all seven filters and the kern/setup action; notes that
  kern/github_updater_repo ships only in the GitHub build.
* Added a Typography section explaining the type system's rationale — the Fraunces
  optical-size and light-display-weight choices, the per-role tracking, the
  loosening line-height rhythm, and the fluid clamp scale.
* Corrected the Accessibility contrast paragraph: the 15.69:1 / 12.25:1 figures
  are the default (root theme.json) palette, not "the Blueprint variation"
  (Blueprint is a selectable variation, not the default). Added that the dark
  bands were audited and that the hairline rules and 404 numeral are decorative.

= 1.6163.2229 =
Dead links:
* Pointed Theme URI at https://thisismyurl.com/colophon (HTTP 200) instead of the
  unpublished /kern/ landing page (HTTP 404). The footer "Built with…" credit reads
  Theme URI from style.css, so the credit link now resolves for every visitor.
* Replaced the hardcoded "All projects" href="/work" in the kern/works-directory
  pattern with a render-time link that resolves to the site's assigned Posts page
  (or the home URL as a fallback), so the link can never 404 on a fresh install.

Internationalization (navigation labels):
* Wrapped the four demo navigation-link labels in the kern/main-navigation pattern
  (Work, Type, Studio, Contact) in esc_html_e(), and extracted them into
  languages/kern.pot. The starter wordmark menu is now translatable; the #anchor
  URLs remain editor-replaceable placeholders.

Documentation:
* Added an evidence-backed contrast figure to the Accessibility section: the
  default Blueprint variation renders body text at 15.69:1 and prose at 12.25:1
  on its ground — both WCAG 2.2 AAA — and Foundry Dark holds 14.99:1 inverted.
* Led the Description with the kern/typeface-pairing "working specimen as a
  publishable page" signature feature and surfaced the five style variations.
* Added a "Build your own theme on the core" subsection to the Developer Guide
  documenting how to start a sibling theme on the portable CORE/SKIN layer.

Internationalization (pattern prose):
* Wrapped every visible visitor string in the block patterns in gettext
  (printf/esc_html_e) — contact-cta, specimen-director, display-hero, works-grid,
  studio-footer, studio-bio, case-study-lead, typeface-pairing, works-directory,
  mark-presentation, and the brief placeholder. Pattern text is now translatable.
* Moved the front-page works section to a kern/works-directory pattern reference so
  its "Selected Work" heading and note are translatable in PHP rather than hardcoded
  in the static template.
* Moved the "Skip to content" link from a static header template part to a
  wp_body_open callback in inc/setup.php, wrapped in esc_html__() so its label
  translates. Exactly one skip link still renders, first in the body.
* Regenerated languages/kern.pot: header version corrected to 1.6163.2229 and every
  newly-wrapped pattern, setup, and admin string is now extracted.

Developer:
* Gated the GitHub self-update opt-in in inc/skin.php behind a file_exists() check
  for inc/github-updater.php, so the GitHub repo and the WordPress.org build (which
  strips the updater) behave identically — no active self-updater in either.
* Added a child-theme example and a Style Variations section to the readme.

Submission honesty:
* Corrected "Tested up to" from a non-existent WordPress 7.0 to 6.8 (the highest
  real released line tested) in style.css and readme.txt.
* Lowered "Requires PHP" from 8.1 to 8.0 to match the actual floor — the highest
  PHP feature used in the codebase is str_starts_with()/str_ends_with() (PHP 8.0);
  no 8.1-specific syntax is present.

Internationalization:
* Removed the last three hardcoded English visitor strings from the query
  no-results states (archive, index, and front-page works directory). The
  surrounding heading or section title now frames the empty state; archive and
  index offer a core search form to retry. No untranslatable prose ships.

Documentation:
* Added a reviewer-facing Architecture section describing the CORE/SKIN split.
* Corrected a stale inc/bindings.php header comment that named the old
  "colophon/copyright" binding source instead of the SLUG-derived kern/copyright.
* Removed a placeholder href="#" anchor from the front-page works section header.

Accessibility (WCAG 2.1 1.3.1):
* The archive and search titles are now explicit h1 headings; the index template
  gains an h1 page heading; the blank-canvas page template gains an empty,
  editor-fillable h1. (Front page and 404 already had one.)

Internationalization:
* Removed hardcoded English visitor prose from the 404 template (the "this page
  doesn't exist" paragraph) and the search template (the "Search Results" eyebrow
  and the no-results paragraph). Each state now relies on the heading, the core
  query-title block's own localized string, and a re-offered search form, so
  non-English sites no longer see untranslatable English.
* The footer "Built with…" credit now binds to the kern/footer-credit source
  (translatable, filterable) instead of a hardcoded line.

Developer:
* The Get started developer-guide URL is filterable via kern/developer_guide_url;
  this and the copyright/credit filters are documented in the Developer Guide
  section with PHP 7.4-compatible examples.

Hardening:
* Hardened comment-form attribute injection: a guarded preg_replace (single
  replacement, null-check, no-match fallback) replaces a naive str_replace that
  could double-inject or mangle markup.
* oEmbed content width now reads theme.json contentSize (pixel-validated, 720px
  fallback) instead of a hardcoded literal.

Requirements:
* Requires PHP 8.0+ and WordPress 6.7+. Block bindings (footer copyright and
  credit) require WordPress 6.5+.

= 1.6148.1706 =
* Version timestamp suffix added per project versioning scheme.

= 1.6148 =
* Initial release.
* Front page: specimen-director hero layout.
* Patterns: specimen-director, typeface-pairing, works-directory, mark-presentation, case-study-lead, studio-bio, brief.
* Templates: front-page, index, single, archive, page, page-wide, page-blank, search, 404.
* Block styles: kern-eyebrow, kern-annotation, kern-directory-entry, kern-mark-card, kern-specimen-display.

== Credits ==

= Fraunces =
* Copyright 2020 The Fraunces Project Authors (https://github.com/undercasetype/Fraunces)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/undercasetype/Fraunces

= Plus Jakarta Sans =
* Copyright 2020 The Plus Jakarta Sans Project Authors (https://github.com/tokotype/PlusJakartaSans)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/tokotype/PlusJakartaSans

== License ==

Kern WordPress Theme is licensed under the GNU General Public License v2 or later.

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software Foundation,
either version 2 of the License, or (at your option) any later version.

== Copyright ==

Kern WordPress Theme, Copyright 2026 Christopher Ross
Kern is distributed under the terms of the GNU GPL.
