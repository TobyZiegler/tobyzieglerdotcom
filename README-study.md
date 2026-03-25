# Toby's Study — Project Brief & Living Document

> *This README serves as the running brief for tobyziegler.com. Paste it at the start of any working session to restore context. Update it as decisions are made.*

---

## What This Is

**Toby's Study** is the personal website of Toby Ziegler — graphic designer, document manager, project manager, and AI-directed software engineer. It lives at tobyziegler.com and serves as the central hub for a growing collection of showcase projects and personal stories, each housed in its own subdomain.

The site makes an argument: that design thinking, domain expertise, and precise AI direction is a legitimate and interesting way to build real software. The projects are the proof. But it's also just a comfortable place on the internet that feels like home — welcoming, inviting, and from a real person not afraid to be real.

The site is currently mid-rewrite — rebuilt from scratch using an AI-directed engineering process. The rewrite is intentionally visible; it's part of the story being told.

---

## The Concept

The site is organized around the metaphor of **a study** — a personal space where work accumulates thoughtfully over time. Curated, not cluttered. A place that reflects the person who inhabits it.

Subdomains extend the metaphor as natural "rooms." Each room has its own personality but the same authorial voice. Same author, different register.

| Room | Subdomain | Status | Purpose |
|---|---|---|---|
| **The Study** | tobyziegler.com | Live (rewrite in progress) | Main site — hub, identity, project showcase |
| **Dad-a-Base** | dadabase.tobyziegler.com | Live | First showcase project — full-stack joke database |
| **The Resume** | resume.tobyziegler.com | Planned | Professional résumé with AI job fit tool |
| **The Workshop** | workshop.tobyziegler.com | Future | Smaller works — scripts, experiments, utilities, photos |
| **The Children of the Checks** | treasury.tobyziegler.com | Future | The story and examples of how checks for the CMN telethon evolved |
| **Toby's Food Faces** | pantry.tobyziegler.com | Future | The story and photos of the lunchtime unique faces endeavor |

---

## Audience

Primary: **Forward-thinking employers and hiring managers** — people building things who would recognize and value this approach. Many will arrive from LinkedIn.

Secondary: **Other builders and developers** curious about AI-directed engineering as a practice.

The site should feel like it was made by someone interesting. Visitors should leave thinking *"I like this guy"* and *"that's neat."*

---

## Voice & Tone

- Warm, human, confident
- Dry wit — present but not performed
- Self-aware without being precious
- Not afraid to be a little bit itself
- Tells the truth about how things were built — Toby is an experienced coder who *chooses* to direct AI because it's faster and better. He may write some code himself. The framing is always about the *approach*, never a claim about never touching a keyboard.
- Does not oversell or use corporate language
- Benchmark: the Dad-a-Base "How This Was Built" page — that's the voice and candor to match

**Not:** A skills inventory. A resume in a browser. A template with a name on it.

---

## Visual Direction

### Relationship to Dad-a-Base
*Same author, different register.* The main site shares the component language and typographic system of Dad-a-Base but has its own distinct color palette and personality.

### Typography
- **Display / Headings:** Fraunces (variable serif — use italics deliberately)
- **Body / UI:** DM Sans
- These are non-negotiable. They are the thread connecting all rooms.

### Buttons
- Pill-shaped: `border-radius: 1.2em`
- Text: `font-size: 1.2em`, `border: 0.2em`
- Applies to all buttons site-wide

### Type Scale
All font sizes are in `rem` (or `em` for contextual button sizing), with `clamp()` for fluid display sizes. The root font size is fluid: `clamp(16px, 1.25vw + 0.5rem, 26px)` — scales from ~16px on mobile to ~26px on large displays. All spacing, padding, and layout dimensions are in `rem` and scale with it. Pixels are reserved for hairline borders (1px, 1.5px, 2px), box-shadow offsets/blur, the media breakpoint (768px), and the root font size definition itself.

### Color Palette — Settled

| Role | Variable | Hex | Feel |
|---|---|---|---|
| Page background | `--bg` | `#F5F0E8` | Warm parchment — the walls |
| Dark surface | `--bg-dark` | `#1C1712` | Near-black warm (reserved; footer now uses bookcase gradient) |
| Primary text | `--text` | `#2C1F14` | Deep espresso |
| Muted text | `--text-muted` | — | Secondary copy |
| Primary accent | `--accent-green` | `#3A5C3B` | Forest green — the leather chair |
| Secondary accent | `--accent-burg` | `#7B2D3A` | Burgundy — the lamp, the book spine |
| Soft white | `--white-soft` | `#FAF7F2` | Breathing room |
| Rule / divider | `--rule` | `rgba(44,31,20,0.15)` | Structural lines, subtle warm |

### Section Backgrounds — Settled

| Section | Background | Notes |
|---|---|---|
| Hero | `#F5F0E8` | Base parchment |
| Projects | `#EDE6D8` | Slightly darker parchment |
| About | `#F5F0E8` | Base parchment |
| Process | `#EDE6D8` | Matches Projects |
| Contact | `#F5F0E8` | Base parchment |
| Footer | `linear-gradient(180deg, #803300 0%, #5c2a10 35%, #3e1c08 70%, #2a1005 100%)` | Matches bookcase base gradient |

### Decorative Elements
- Fewer than Dad-a-Base, but not eliminated
- No emoji overload — use sparingly and with intention
- Small graphic accents are fine; nothing cutesy
- Noise texture overlay on body (`body::before`, `opacity: 0.04`) — always `pointer-events: none`

---

## Site Structure

### Phase 1 — Single Scrolling Page
Architected to grow into multi-page navigation without a rebuild.

| # | Section | Decorative Tag | Status |
|---|---|---|---|
| 1 | Hero | — | Built |
| 2 | Projects | The Work | Built |
| 3 | About | The Philosophy | Built |
| 4 | Process | The Method | Built |
| 5 | Contact | Get in Touch | Built |
| — | Footer | — | Built |

### Navigation
- Fixed nav bar (`#main-nav`), transparent → frosted glass on scroll (`.scrolled` class toggled by JS)
- **CRITICAL:** Nav CSS must be scoped to `#main-nav`, NOT `nav` — the footer contains a `<nav class="footer-nav">` that will be yanked fixed to the top of the screen if the selector is unscoped.
- **CRITICAL:** `overflow-x: hidden` must be on `html`, NOT `body` — setting it on `body` suppresses pointer events on fixed children, making nav links unclickable.
- `scroll-margin-top: 5rem` on all four target sections (#projects, #about, #process, #contact) — offsets scroll-to-anchor so the fixed nav doesn't cover section headings.
- Nav links labeled: The Work / The Philosophy / The Method / Get in Touch (matching section decorative tags)
- No map widget — ever

### Footer
- Three-column grid: Wordmark + tagline left / page nav links centre / other rooms right
- **Page nav** (`.footer-nav`): The Work, The Philosophy, The Method, Get in Touch — links to section anchors
- **Other rooms** (`.footer-rooms`): horizontal flex-wrap list — currently Dad-a-Base + The Resume
- Base bar: auto-updating copyright year (JS) + GitHub source link

### Resume
- Separate subdomain: resume.tobyziegler.com (see README-resume.md)
- Link from this page: nav bar + contextual placement near About section
- Treatment: pill button with ↗, copy as invitation not label

### Error Pages
Custom `.shtml` error pages built for Namecheap/Apache `server-parsed` handler:
- `404.shtml` — Not Found
- `502.shtml` — Bad Gateway
- `504.shtml` — Gateway Timeout
- `508.shtml` — Resource Limit Reached
All share the Study design system (same fonts, palette, voice). Each includes a home link, a brief human-voiced explanation, and a dry-witted line consistent with the site's tone. Must be referenced in `.htaccess`.

---

## The Bookcase — Projects Section

Built as a **literal bookcase** — one unified structure where each shelf is a project card. No max-width constraint — fills available section width. Bookcase CSS must be scoped carefully; `overflow: hidden` on `.bookcase` clips uprights cleanly.

### Bookcase Anatomy & Colors

| Element | Value | Notes |
|---|---|---|
| Section background | `#EDE6D8` | Slightly darker parchment |
| Shelf back panels | `url('assets/WoodenPlanks.svg')` | SVG tile, `background-size: 1152px auto`, fallback `#803300` |
| Uprights | Left: `#996633→#4a1e00` (90deg) / Right: `#4a1e00→#996633` (90deg) | Light-to-dark toward shelf interior |
| Shelf ledges | `#996600→#803300→#6b2a00→#4a1e00` | Top highlight `rgba(204,135,51,0.5)` |
| Base | `#803300→#5c2a10→#3e1c08→#2a1005` | 3rem tall |
| Bookcase padding | `0` (zero) — uprights are absolutely positioned | Side borders removed from shelf backs/ledges; uprights own those edges |

### WoodenPlanks.svg
- Located at `assets/WoodenPlanks.svg` (same level as `index.html`)
- SVG palette: `#803300` dark grain, `#cc8733` light highlight, `#996600` mid, `#503320` shadow
- All bookcase structure colours derived from this palette

### Shelf Content
- **Shelf 1 (live — Dad-a-Base):** Two-column grid. Left: project panel (`padding: 2rem 1.5rem 2rem 4rem` — extra left for upright clearance). Right: joke spotlight (`padding: 2rem 4rem 2rem 1.5rem` — extra right for upright clearance), centered both axes.
- **Shelves 2–6 (ghost):** `opacity: 0.45`, faint number + label

### Shelf 1 — Dad-a-Base (live)
- Placeholder joke always visible on load
- Silently fetches from `https://dadabase.tobyziegler.com/random.php` and replaces if CORS allows
- ⚠️ **Action needed:** Add `header('Access-Control-Allow-Origin: *');` to `random.php` before any output

---

## Settled Copy

### Hero Headline (4 lines, exact)

```
Like a conductor
with an orchestra,
I am directing AI to
build software with me.
```

- "directing" — italic green (`--accent-green`)
- "build software" — italic burgundy (`--accent-burg`)
- All four lines animate in with staggered slide-up on load

### Hero Subhead (exact)

> Thirty years of design thinking. A precise hand on the baton.
> Let me share with you what that looks like for me…

### Discipline Tags (hero, right side, vertical)
- Graphic Design
- Document Management
- Project Management
- *(decorative rule)*
- AI-Directed Engineering *(burgundy, styled as active)*

### Hero Actions
- Primary button: "See the work →" — green filled, links to `#projects`
- Secondary button: "How it's made →" — outline, links to `#process`
- Scroll indicator pushed to far right via `margin-left: auto` on the flex row

---

## About Section — The Philosophy

- **Heading:** *Design thinking meets the new tools.*
- **Lede:** "I've spent a lifetime making things look right, work right, and *mean something.*..."
- **Key framing:** Experienced coder (PHP, HTML, CSS, and more). Directs AI because it's faster and produces better results, not because he can't write the code.
- **Pull quote:** *"A conductor doesn't play every instrument. They know the score, they hear what's off, and they know exactly how to get what they want from the ensemble."*
- **Closing:** *"Taste and judgment aren't soft skills. They're the whole job."*

---

## Process Section — The Method

- **Heading:** *The Madness of a Study.* *(working title — the method-within-madness theme is right)*
- **Lede:** Origin story. The idea of a comfortable landing page, turned into a study, with rooms branching off.
- **Expand button:** "See how it really works" ↔ "Show less"

### Expanded Blocks (in order)
1. **The Approach** — AI direction as applied knowledge, not a workaround.
2. **The Workflow** — README-first sessions. Describe precisely, iterate, update README at end.
3. **The Tools** — Claude (pairing model). Minimal stack rationale.
4. **What Goes Wrong** — Three obstacle cards: Context Drift, Confident Wrong Answers, Scope Creep in Both Directions
5. **Why This Matters** — Contractor analogy. The method doesn't change what the thing is.

---

## Contact Section — Get in Touch

- **Heading:** *Let's talk about something real.*
- **Email link:** Displayed as HTML entities, `mailto:` assembled at runtime via JS — never appears as plain text in source
- **Form:** Minimal underline-only inputs; name + email side by side, message below; "Send it →" primary button
- **Reassurance line:** "No newsletters. No follow-up sequences. Just a reply."
- **Form action:** `contact.php` — built; upload to document root alongside index.html. Not in version control.
- **Honeypot:** CSS-positioned off-screen field named `website`; server silently accepts if filled

---

## Email Obfuscation

The contact email address (`toby@tobyziegler.com`) is protected by two layers:
1. **Display** — rendered as numeric HTML entities in the HTML source
2. **Link** — `mailto:` href assembled at runtime from split unicode-escaped JS strings; never appears as a complete address in source

No plain `toby@` appears anywhere in the file.

---

## Dad-a-Base Reference

- **Live:** dadabase.tobyziegler.com
- **Repo:** github.com/TobyZiegler/dadabase
- **Random joke endpoint:** `https://dadabase.tobyziegler.com/random.php`
  - Returns: `{id, setup, punchline, submitted_by, status, ha_count, groan_count, created_at}`
- **Style variables:** `--cream: #FAF7F2`, `--warm-white: #FFFEF9`, `--espresso: #0F0804`, `--accent: #942E18`, `--accent-2: #1E4D44`, `--taupe: #5C4D3C`, `--brown: #2E1F12`

---

## The Thesis

> *A person with design judgment, systems thinking, and the ability to direct AI precisely can build real, production-grade software. Domain expertise and taste matter as much as syntax. Here is the proof.*

Everything on the page should add up to this, without saying it verbatim.

---

## What This Site Is Not

- Not a traditional developer portfolio
- Not a design agency site
- Not a resume with scroll effects
- Not a template
- Not trying to look like everyone else

---

## Known Gotchas

- **`overflow: hidden` on `#hero`** — do not add this back. It creates a stacking context that traps the fixed nav.
- **`overflow-x: hidden` on `body`** — do not set this. It suppresses pointer events on `position: fixed` children (nav links become unclickable). Set on `html` instead.
- **`nav` CSS selector** — must always be `#main-nav`, never bare `nav`. The footer `<nav class="footer-nav">` will be yanked fixed to the top of the screen if the selector is unscoped.
- **`</style>` tag** — must be present before `</head>`. Easy to lose during edits; verify with `grep -c "</style>"`.
- **CORS on `random.php`** — required for live joke fetch from tobyziegler.com to dadabase.tobyziegler.com.
- **`contact.php`** — built; upload to document root alongside index.html. Not in version control (contains configuration).
- **Line numbers in VS Code** — word wrap causes visual line count to differ from actual. Toggle with `Option+Z`. True count: `wc -l index.html`.
- **VS Code format-on-save** — HTML formatter will reformat the file on save. Disable for HTML by adding `"[html]": { "editor.formatOnSave": false }` to User Settings JSON (`Cmd+Shift+P` → "Open User Settings JSON").
- **File truncation** — if the file ever seems to end abruptly, check with `grep -c "</html>"`. Should return 1.
- **Namecheap subdomain document root** — can get recreated pointing somewhere unexpected after edits. Verify in cPanel → Domains if a subdomain stops serving.
- **DNS A records** — tobyziegler.com previously had stale GitHub Pages A records (`185.199.x.x`) alongside the Namecheap record. Resolved, but worth checking if the site ever goes dark unexpectedly.

---

## Open Decisions

- [x] Color palette — settled
- [x] Section backgrounds — settled
- [x] Button style — pill-shaped, `border-radius: 1.2em`, `font-size: 1.2em`
- [x] Type scale — fluid root, all rem, enlarged ~25–50%
- [x] Hero headline — settled, exact wording and styling
- [x] Hero subhead — settled
- [x] All five sections — built
- [x] Footer — built with horizontal rooms list
- [x] Email obfuscation — entities + JS assembly
- [x] Contact section — built including `contact.php` handler
- [x] Rooms — Dad-a-Base + The Resume in footer; four future rooms named
- [x] Nav links — labeled to match section tags; `scroll-margin-top` applied; `#main-nav` scoped
- [x] Bookcase — wood plank SVG texture, palette-matched structure, uprights touching flush
- [x] Footer gradient — matches bookcase base
- [x] Error pages — 404, 502, 504, 508 built as `.shtml` files
- [ ] Process heading — "The Madness of a Study" is working, not final
- [ ] Resume link placement — nav + contextual (not yet added to page)
- [ ] Resume subdomain — not yet built (see README-resume.md)
- [ ] Project shelf screenshots — placeholder in place for Shelf 1
- [ ] CORS header in `random.php`
- [ ] LinkedIn note — brief "site in rewrite" notice to be added to page (placement TBD)
- [ ] Study metaphor in UI — explicit or just informing the design?

---

## Technical Baseline

- **Hosting:** Namecheap shared hosting (cPanel)
- **Deployment:** Git via cPanel Git Version Control (not GitHub Actions — Namecheap firewall blocks inbound SSH)
- **Stack:** PHP, HTML/CSS, vanilla JavaScript — no frameworks, no build step
- **SSL:** Resolved — monitor for continued activation
- **Source:** github.com/TobyZiegler/tobyzieglerdotcom
- **Output:** Single `index.html` — all CSS and JS inline; external dependencies are Google Fonts only
- **Assets:** `assets/WoodenPlanks.svg`, `assets/shared.css`, `assets/ParchmentPattern01.phg` — same directory level as `index.html`
- **Error pages:** `404.shtml`, `502.shtml`, `504.shtml`, `508.shtml` — document root, referenced in `.htaccess`
- **`.htaccess`:** `DirectoryIndex index.html` (index.php entry removed to prevent old site from loading)

---

## How to Use This Document

At the start of any working session, paste this README into the conversation. Update it at the end of any session where decisions were made. Treat it as the single source of truth — if it's not in here, it hasn't been decided.

---

*Last updated: March 2026 — bookcase wood texture implemented; footer gradient matched to bookcase base; nav scoped to #main-nav; overflow-x gotcha documented; error pages built; LinkedIn audience noted; rooms list horizontal in footer; section decorative tags restored; DNS A-record gotcha documented.*