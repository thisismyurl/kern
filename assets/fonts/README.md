# Kern — Font Files

Kern bundles two variable font families: **Fraunces** and **Plus Jakarta Sans**.
Both are licensed under SIL OFL 1.1 and are safe to bundle with a GPL theme.

Font binary files are **not** committed to the repository — they must be
downloaded separately. This is because binary files bloat git history and
because the fonts are available directly from their canonical sources.

Use the `bin/fetch-fonts.sh` script to download and place them automatically,
or follow the manual steps below.

---

## Automated download

```bash
bash bin/fetch-fonts.sh kern
```

This downloads the WOFF2 files from Google Fonts CDN (as a distribution point
for the SIL OFL files) and places them in this directory with the exact
filenames that `theme.json` expects.

---

## Manual download

### Fraunces

1. Go to https://fonts.google.com/specimen/Fraunces
2. Click "Download family"
3. Extract the ZIP — find `Fraunces[SOFT,WONK,ital,opsz,wght].ttf` (variable font)
4. Convert to WOFF2 using https://cloudconvert.com/ttf-to-woff2 or `woff2_compress`
5. Rename to: `fraunces-variable.woff2`
6. Place in this directory (`assets/fonts/fraunces-variable.woff2`)

For the italic axis:
- Filename: `fraunces-variable-italic.woff2`
- Source: `Fraunces-Italic[SOFT,WONK,ital,opsz,wght].ttf` from the same ZIP

### Plus Jakarta Sans

1. Go to https://fonts.google.com/specimen/Plus+Jakarta+Sans
2. Click "Download family"
3. Extract the ZIP — find `PlusJakartaSans[wght].ttf` (variable font)
4. Convert to WOFF2
5. Rename to: `plusjakartasans-variable.woff2`
6. Place in this directory (`assets/fonts/plusjakartasans-variable.woff2`)

For the italic axis:
- Filename: `plusjakartasans-variable-italic.woff2`
- Source: `PlusJakartaSans-Italic[wght].ttf` from the same ZIP

---

## Expected file list after download

```
assets/fonts/
├── fraunces-variable.woff2
├── fraunces-variable-italic.woff2
├── plusjakartasans-variable.woff2
├── plusjakartasans-variable-italic.woff2
└── README.md  (this file)
```

---

## Fallback behaviour

`inc/assets.php` wraps the font preload in a `file_exists()` guard. If the
font files are not present, the theme renders at system-font fallback
(Georgia / serif for Fraunces, system-ui / sans-serif for Jakarta) with no
PHP errors. Download the fonts to restore the intended type rendering.

---

## License

**Fraunces** — SIL OFL 1.1
- Copyright 2020 The Fraunces Project Authors
- Repository: https://github.com/undercasetype/Fraunces

**Plus Jakarta Sans** — SIL OFL 1.1
- Copyright 2020 The Plus Jakarta Sans Project Authors
- Repository: https://github.com/tokotype/PlusJakartaSans

SIL OFL 1.1 is GPL-compatible. Both fonts may be bundled with and distributed
as part of a GPL-licensed WordPress theme. See https://openfontlicense.org
for the full license text.
