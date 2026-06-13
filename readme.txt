=== Kern ===

Contributors: thisismyurl
Tags: portfolio, blog, one-column, custom-colors, custom-logo, custom-menu, editor-style, featured-images, full-site-editing, block-patterns, accessibility-ready, rtl-language-support, translation-ready, wide-blocks
Requires at least: 6.7
Tested up to: 7.0
Requires PHP: 8.1
Stable tag: 1.6163.2229
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A typographic FSE theme for type studios, brand consultancies, and independent designers. The studio name at display scale IS the hero.

== Description ==

Kern is built for type studios and brand consultancies. The front page presents the studio name at display scale in Fraunces — no hero photograph, no decorative mesh gradient. The type does the work.

The works directory presents portfolio entries as a typographic index (title + year), not a card grid. The typeface pairing specimen pattern documents the type system in WordPress itself, as a publishable page.

WCAG 2.2 AA accessible, Core Web Vitals optimised, self-hosted SIL OFL fonts, RTL-ready via CSS logical properties, zero plugin dependencies.

**Signature feature:** kern/typeface-pairing — a functional type specimen pattern that documents the theme's font pairing as a publishable WordPress page.

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

== Changelog ==

= 1.6163.2229 =
* Accessibility (WCAG 2.1 1.3.1): the archive and search titles are now explicit
  h1 headings; the index template gains an h1 page heading; the blank-canvas page
  template gains an empty, editor-fillable h1. (Front page and 404 already had one.)
* Hardened comment-form attribute injection: a guarded preg_replace (single
  replacement, null-check, no-match fallback) replaces a naive str_replace that
  could double-inject or mangle markup.
* oEmbed content width now reads theme.json contentSize (pixel-validated, 720px
  fallback) instead of a hardcoded literal.
* The Get started developer-guide URL is filterable via kern/developer_guide_url.

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
