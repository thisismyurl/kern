# Kern

A free, typography-first full-site-editing WordPress theme for type foundries, type designers, and editorial brands where text is the product.

[Download from WordPress.org](https://wordpress.org/themes/kern/) · [Releases](https://github.com/thisismyurl/kern/releases) · [Built on Colophon](https://github.com/thisismyurl/colophon)

---

## Why I built it this way

Kern is a typographic term for the space between two specific letterforms — not tracking (uniform spacing across a word), not leading (line spacing), but the precision adjustment between this A and this V when they sit next to each other. It's detail work that most people never consciously notice. Which is exactly how a good theme should work.

I built Kern for type foundries and people who take typography seriously as a craft. The challenge with designing for that audience is that they will immediately test your theme by loading their own typefaces into it, and if the theme has opinions that fight the typefaces — a background colour that muddles contrast, a rhythm that doesn't flex — you've lost them.

So Kern has very few opinions, and every one it has is structural. The grid is proportional. The line-length is set at a comfortable reading column (65–70 characters at body size). The colour palette is near-neutral — cream field, dark charcoal text — so it reads correctly with almost any typeface loaded into it. What Kern doesn't do is make itself the point.

Fraunces was the right choice for the display role because it's a variable optical font with a "wonky" axis — you can feel the hand in the letterforms at large sizes. That quality makes it interesting enough at display scale without stealing attention at text sizes. Plus Jakarta Sans does the structural work: navigation, labels, captions. It's geometrically clean and doesn't interfere.

The typeface specimen pattern was the reason this theme existed before the rest of it did. I couldn't find a WordPress pattern that let you display a typeface in-context — specimen size, specimen phrase, pairing sample — without custom fields or a page builder. So I built it.

---

## Design decisions

- **Fraunces (variable optical) as the display face** — the "wonky" axis makes the character of the letterform visible at large sizes without becoming a distraction. Type designers find it interesting; it doesn't upstage work loaded in later.
- **Near-neutral colour system** — cream field, dark charcoal. Designed to be correct with any loaded typeface, not specifically with the bundled fonts.
- **Typeface specimen pattern** — a ready-made pattern for showing a typeface at scale, with sample text, specimen phrase, and a basic pairing demo. Built because this pattern didn't exist in WordPress core.
- **Single-column layout for all templates** — type work is read, not skimmed. No sidebars, no related-content widgets competing for attention. The text is the product.
- **Brief/contact template included** — type foundries often have a client intake process. The brief template is a starting point for that conversation.

---

## Getting started

1. Install Kern from Appearance → Themes, or upload the zip from [Releases](https://github.com/thisismyurl/kern/releases).
2. Go to Appearance → Editor → Styles. Load your typeface at the theme level so it applies everywhere.
3. Open the Block Inserter, choose Patterns, and find the Kern group. The Typeface Specimen and Type Pairing patterns are the fastest way to build a specimen page.

---

## Technical notes

- WordPress 6.4 or newer, PHP 8.1 or newer
- Full-site editing (FSE/Gutenberg) — no Classic Editor support
- WCAG 2.2 AA compliant
- Zero JavaScript
- OFL-licensed fonts: Fraunces, Plus Jakarta Sans
- Self-hosted fonts — no Google Fonts requests

## License

GPLv2 or later. See [LICENSE](LICENSE).

The fonts bundled in `assets/fonts/` are licensed under the SIL Open Font License (OFL) 1.1.
