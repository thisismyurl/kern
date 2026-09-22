=== Kern ===
Contributors: thisismyurl
Requires at least: 7.0
Tested up to: 7.1
Requires PHP: 8.1
Stable tag: 1.6265.1630
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: blog, news, one-column, three-columns, four-columns, full-site-editing, block-patterns, editor-style, custom-colors, custom-logo, custom-menu, featured-images, translation-ready, rtl-language-support, wide-blocks, threaded-comments

Kern WordPress Theme, Copyright 2026 Christopher Ross
Kern is distributed under the terms of the GNU GPL v2 or later.

A full-site-editing theme for literary and culture magazines run by more than one byline — high-fashion editorial minimalism, a real masthead, and a Masthead Page pattern no other WordPress theme ships.

== Description ==

Kern is for editors, not bloggers.

It takes its name from the typesetting term for the space set between two specific letters — the kind of adjustment only someone who has actually set type ever makes by hand. That is the audience: poetry journals, small presses, university literary reviews, arts and culture quarterlies. Places with a masthead, a contributors list, sections, and more than one person filing copy.

The design is high-fashion editorial minimalism: pure white, near-black ink, and exactly one accent colour — rubric red, named for the print convention of setting a section heading in red ink — used nowhere but the category label above a headline. Newsreader (a transitional serif built for long-form reading, self-hosted as a variable font) carries every headline and paragraph; Plus Jakarta Sans (a quiet grotesque, also self-hosted) carries the masthead, the bylines, and the rubric labels. Nothing on the page is decoration for its own sake.

The masthead itself runs in three rows, the way a printed front matter does: a quiet utility line (search, Archive, Subscribe), the wordmark set large and centred, then the section navigation. And Kern ships a pattern no other WordPress.org theme has: a real Masthead Page — Editor-in-Chief, Fiction Editor, Poetry Editor, Art Director, the rotating cast of contributing writers "this issue" — set the way an actual print colophon runs, not the photo-name-job-title grid every "team" section on the web defaults to.

* Full-site editing — every template and template part editable in the Site Editor.
* Newsreader (headings + body) and Plus Jakarta Sans (nav, meta, bylines, rubric labels) — self-hosted variable OFL fonts, zero third-party requests.
* The Masthead Page pattern — Kern's signature. A real staff colophon: role, then name.
* A three-row masthead template part: utility bar, centred nameplate, section navigation.
* Eight editorial patterns: Lead Story Hero, Story Grid, Section Header, Pull Quote Feature, Contributor Byline, Masthead Page, Featured in This Issue, Subscribe CTA.
* The Rubric block style (`is-style-kn-rubric`) — the small tracked category label, the one place the accent colour appears.
* A custom drop cap keyed to Newsreader's proportions, and a Standfirst paragraph style for the dek under a headline.
* Zero front-end JavaScript, zero plugin dependencies.
* WCAG 2.2 AA accessibility — skip link, visible focus, sensible heading order, prefers-reduced-motion honoured globally.
* Core Web Vitals discipline — self-hosted fonts, font-display: swap, LCP font preloaded, no render-blocking requests.
* Six-layer CSS cascade (reset, base, layout, components, blocks, utilities).
* Full WooCommerce compatibility, inherited from the Colophon core.
* Filterable hooks at every extension point — content_width, skip_link_target, skip_link_label, register_nav_menus, copyright_date_format, register_image_sizes, register_block_styles, register_pattern_categories, onboarding_capability, footer_credit, preload_fonts, and more.
* Translation-ready — every user-facing string is internationalised.
* RTL-ready through CSS logical properties.

== Setting up your site ==

Four touchpoints get you from an installed theme to a running magazine:

1. Settings > Reading. Choose a static front page and give your posts their own page.

2. Appearance > Editor > Navigation. Build your section menu — Fiction, Poetry, Essays, Interviews, Reviews, whatever your magazine actually runs — for the masthead's third row.

3. Pages > Add New. Create a page called "Masthead," insert the Masthead Page pattern from the block inserter (category: Kern: Masthead), and replace the sample roles and names with your own staff. Link it from the footer's "Masthead & contributors" item.

4. Posts > Add New. Assign each post a category — the rubric label above every headline and card comes straight from it.

== Frequently Asked Questions ==

= Does this theme contact any third-party servers? =

No. Newsreader and Plus Jakarta Sans are bundled as self-hosted variable WOFF2 files inside the theme folder. No fonts load from Google Fonts, Adobe Fonts, or any other external service. No analytics or tracking scripts are included.

= Is this related to other themes in a line? =

Yes. Colophon, Masthead, Margin and Quillwork are each built on the same shared core: copied and re-skinned with their own type families, palettes, and template personalities. Each theme is standalone; installing Colophon is not required to use Kern. GUIDE.md, included in the theme folder, describes how the line is built.

= Where is the Masthead Page pattern? =

Open the block inserter on any Page, switch to Patterns, and look under "Kern: Masthead." Insert "Masthead Page," then edit the sample roles and names — everything is plain paragraph text, no custom fields required.

= Can I add a different typeface? =

Yes. Add your font files to assets/fonts/, declare them in theme.json under settings.typography.fontFamilies, and assign them in Styles inside the Site Editor.

= How does the Lead Story Hero pattern get its image? =

It doesn't use a static demo photo — it binds to your most recently published post through a Query Loop, so the hero always shows your actual featured image, headline and excerpt. Publish a post with a featured image set and the hero updates itself.

= How do I remove the footer credit? =

In the Site Editor, open the Footer template part and delete the credit paragraph — it is a plain paragraph block, not a locked or dynamic one, so it comes out in about 30 seconds. No hard feelings.

== Installation ==

1. In your WordPress admin, go to Appearance > Themes > Add New.
2. Click Upload Theme, choose the Kern .zip, and click Install Now.
3. Click Activate.
4. Visit Appearance > Kern: Get started for setup guidance.

To build your own theme on the same Colophon core, see GUIDE.md in the theme folder.

== Changelog ==

= 1.6265.1630 =
Synced two fixes from Colophon core (1.6265.1620), found during independent
wp-expert reviews of Kerf and Halyard, since this theme was still running
the pre-fix core:

* functions.php gained the file_exists() guard on the WP-CLI require that a
  separate regression had dropped (inc/cli.php isn't present in this theme;
  a wp-cli command against it would otherwise fatal). inc/bindings.php also
  now registers the kern/footer-credit source, available if a future
  revision adds a credit line back — this theme's own footer intentionally
  carries none today, so nothing currently renders from it.
* settings.typography.defaultFontSizes and
  settings.spacing.defaultSpacingSizes set to false, matching the rest of the
  collection, so the editor's own auto-generated presets stop merging with
  this theme's own curated set.

= 1.6162.1430 =
* Re-skinned from the Colophon core for literary and culture magazines.
* New type pairing: Newsreader (headings + body, self-hosted variable OFL) and Plus Jakarta Sans (nav, meta, bylines, rubric labels, self-hosted variable OFL). Replaces EB Garamond and Spectral.
* New near-monochrome editorial palette: true-black display ink, four reading-ink steps, two paper tones, two rule tones, and one accent — rubric red (#8c1512) — used only on category labels and interactive states.
* Three-row masthead template part (parts/header.html): utility bar, centred nameplate, section navigation.
* Eight new patterns: Lead Story Hero, Story Grid, Section Header, Pull Quote Feature, Contributor Byline, Masthead Page (signature), Featured in This Issue, Subscribe CTA.
* Three new block styles: kn-rubric (category label), kn-dropcap (Newsreader-proportioned drop cap), kn-standfirst (headline dek).
* New image sizes: kern-hero (1600x1000) and kern-card (640x800, 4:5 portrait crop for the story grid).
* All templates and patterns re-authored around the kn- class prefix; the core --cl-* semantic token contract is bound to Kern's own palette in skin.css.
* LCP font preload rewired to the Newsreader variable file.

= 1.0.0 =
* Initial release, forked from the Colophon core.

== Copyright ==

Kern WordPress Theme, (C) 2026 Christopher Ross.
Kern is distributed under the terms of the GNU General Public License v2 or later.

Newsreader, (C) 2019 The Newsreader Project Authors (Production Type).
Newsreader is distributed under the SIL Open Font License 1.1.
https://github.com/googlefonts/newsreader

Plus Jakarta Sans, (C) 2020 The Plus Jakarta Sans Project Authors (Tokotype).
Plus Jakarta Sans is distributed under the SIL Open Font License 1.1.
https://github.com/tokotype/PlusJakartaSans
