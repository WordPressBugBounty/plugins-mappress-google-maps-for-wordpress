# MapPress Release Testing Checklist

Run before each release. Test in all five contexts — settings plumbing differs per context
(block attributes vs shortcode atts vs map object), so a toggle working in one proves
nothing about the others (see the 2.97.x mashup-block attribute bugs).

## Contexts

1. **Mashup block in Gutenberg** (`mappress/mashup`)
2. **Map block in Gutenberg** (`mappress/map`)
3. **Mashup in Classic editor** (shortcode `[mashup]`)
4. **Map in Classic editor** (shortcode `[mappress]`)
5. **Map in the standard map editor** (MapPress admin menu / map library)

## Per-context checks

For each context, verify the per-map settings save AND take effect on the frontend
(each toggle has On / Default / Off; "Default" must fall back to the global setting,
On/Off must override it in both directions):

- [ ] POI list (`poiList` / `poilist=`)
- [ ] Search (`search=`)
- [ ] Filter (`filter=`)
- [ ] Travel lines (`lines=`)
- [ ] Custom CSS class (block Advanced panel `className` / shortcode `class=`) appears on `<mappress-map>`
- [ ] Center/Zoom: Automatic fits POIs; Set persists and matches editor/frontend
- [ ] Width / height / size presets
- [ ] Mashup only: query builder — taxonomy cards render, terms lazy-load on dropdown open
      (one request per taxonomy, `context=view`), selected terms show names after reload,
      saved query filters the map

## Editor-behavior checks (Gutenberg)

- [ ] Toggles display their saved state when reopening the editor (not stuck on "Default")
- [ ] Zoom/pan in the editor canvas holds — no auto-recenter loop (empty-query mashups especially)
- [ ] No console errors on editor load or block insert

## Frontend checks

- [ ] Map renders (Leaflet/OFM and Google engines if both configured)
- [ ] Custom marker icons honor iconScale (inline style wins over Leaflet's `width: auto`)
- [ ] Icons render at the same size in editor and frontend
- [ ] With a JS minifier active (SiteGround Speed Optimizer etc.): maps still render
      (`sgo_js_minify_exclude` filter present)

## Build

- [ ] Production webpack build (`npm run test` / `pro` / `free`) — NOT the dev/watch build
      (dev builds contain `eval()` bundles; check `build/index_mappress*.js` doesn't start with eval wrappers)
- [ ] Verify new attributes/fixes are present in `build/` output, not just `src/`

## Status — session of 2026-07-20 → 2026-07-23 (v2.97.8 dev)

Tested and passing (dev site, Leaflet/OFM engine):
- (1) Mashup block Gutenberg: filter/search/lines/poiList attributes register, save,
      display state, honored on frontend
- (2) Map block Gutenberg: poiList Off and On-override-of-global-Off honored on frontend
- (3) Mashup in Classic editor: `[mashup ... filter/poilist/lines/search="false"]` all honored;
      Classic edit screen loads with MapPress TinyMCE button + location meta box, no errors
- (4) Map in Classic editor: `[mappress mapid=.. poilist="false"]` honored
- (5) Standard map editor: all four toggles render; POI list On persists to frontend
      (required to_json() fix — poiList/lines were missing from the whitelist)
- Custom class: block `className` and shortcode `class=` render on `<mappress-map>`
- Query builder: lazy term loading, pagination >100 terms, spinner, retry on reopen
- Editor zoom recenter loop fixed (EMPTY_QUERY + stringify dep)

Bug found + fixed during this pass:
- `to_json()` whitelist omitted `poiList` and `lines`, so the standard map editor
  silently dropped those two settings on save. Added both. (Classic quirk: settings
  plumbing differs per context — exactly why this checklist exists.)

Not yet tested this session:
- Google engine (dev site runs Leaflet/OFM only)
- Icon inline-style fix and center/zoom parsedCenter sync (proposed, not yet applied)
