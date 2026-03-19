# Toby's Study — Project Brief & Living Document

> *This README serves as the running brief for tobyziegler.com. Paste it at the start of any working session to restore context. Update it as decisions are made.*

---

## What This Is

**Toby's Study** is the personal website of Toby Ziegler — graphic designer, document manager, project manager, and AI-directed software engineer. It lives at tobyziegler.com and serves as the central hub for a growing collection of showcase projects and personal stories, each housed in its own subdomain.

The site makes an argument: that design thinking, domain expertise, and precise AI direction is a legitimate and interesting way to build real software. The projects are the proof. But it's also just a comfortable place on the internet that feels like home — welcoming, inviting, and from a real person not afraid to be real.

---

## The Concept

The site is organized around the metaphor of **a study** — a personal space where work accumulates thoughtfully over time. Curated, not cluttered. A place that reflects the person who inhabits it.

Subdomains extend the metaphor as natural "rooms." Each room has its own personality but the same authorial voice. Same author, different register.

| Room | Subdomain | Status | Purpose |
|---|---|---|---|
| **The Study** | tobyziegler.com | Live | Main site — hub, identity, project showcase |
| **Dad-a-Base** | dadabase.tobyziegler.com | Live | First showcase project — full-stack joke database |
| **The Resume** | resume.tobyziegler.com | Planned | Professional résumé with AI job fit tool |
| **The Workshop** | workshop.tobyziegler.com | Future | Smaller works — scripts, experiments, utilities, photos |
| **The Children of the Checks** | treasury.tobyziegler.com | Future | The story and examples of how checks for the CMN telethon evolved |
| **Toby's Food Faces** | pantry.tobyziegler.com | Future | The story and photos of the lunchtime unique faces endeavor |

---

## Audience

Primary: **Forward-thinking employers and hiring managers** — people building things who would recognize and value this approach.

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
| Dark surface | `--bg-dark` | `#1C1712` | Near-black warm — footer |
| Primary text | `--text` | `#2C1F14` | Deep espresso |
| Muted text | `--text-muted` | — | Secondary copy |
| Primary accent | `--accent-green` | `#3A5C3B` | Forest green — the leather chair |
| Secondary accent | `--accent-burg` | `#7B2D3A` | Burgundy — the lamp, the book spine |
| Soft white | `--white-soft` | `#FAF7F2` | Breathing room |
| Rule / divider | `--rule` | — | Structural lines, subtle warm |

### Section Backgrounds — Settled

| Section | Background | Notes |
|---|---|---|
| Hero | `#F5F0E8` | Base parchment |
| Projects | `#EDE6D8` | Slightly darker parchment |
| About | `#F5F0E8` | Base parchment |
| Process | `#EDE6D8` | Matches Projects |
| Contact | `#F5F0E8` | Base parchment |
| Footer | `#1C1712` | `--bg-dark` |

### Decorative Elements
- Fewer than Dad-a-Base, but not eliminated
- No emoji overload — use sparingly and with intention
- Small graphic accents are fine; nothing cutesy

---

## Site Structure

### Phase 1 — Single Scrolling Page
Architected to grow into multi-page navigation without a rebuild.

| # | Section | Tag | Status |
|---|---|---|---|
| 1 | Hero | — | Built |
| 2 | Projects | The Bookcase | Built |
| 3 | About | The Philosophy | Built |
| 4 | Process | The Method | Built |
| 5 | Contact | Get in Touch | Built |
| — | Footer | — | Built |

### Navigation
- Fixed nav bar, transparent → frosted glass on scroll (`nav.scrolled`)
- `overflow: hidden` must NOT be set on `#hero` — it creates a stacking context that traps the fixed nav
- No map widget — ever

### Resume
- Separate subdomain: resume.tobyziegler.com (see README-resume.md)
- Link from this page: nav bar + contextual placement near About section
- Treatment: pill button with ↗, copy as invitation not label

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
- All four lines animate in with staggered slide-up on load (delays: 0.65s / 0.82s / 0.99s / 1.16s)
- `line-height: 1.2` — enough to clear descenders on Fraunces

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
- `align-items: center` on `.hero-actions` — prevents scroll indicator from stretching buttons

---

## About Section — The Philosophy

- **Heading:** *Design thinking meets the new tools.*
- **Lede:** "I've spent a lifetime making things look right, work right, and *mean something.*..."
- **Key framing:** Experienced coder (PHP, HTML, CSS, and more). Directs AI because it's faster and produces better results, not because he can't write the code. "I could write this code myself — I have, many times — but AI does it faster and with fewer mistakes than I ever could alone."
- **Pull quote:** *"A conductor doesn't play every instrument. They know the score, they hear what's off, and they know exactly how to get what they want from the ensemble."*
- **Closing:** *"Taste and judgment aren't soft skills. They're the whole job."*

---

## Process Section — The Method

- **Heading:** *The Madness of a Study.* *(working title — the method-within-madness theme is right)*
- **Lede:** Origin story. The idea of a comfortable landing page, turned into a study, with rooms branching off. Key line: *"a comfortable place on the internet that feels like home."*
- **Expand button:** "See how it really works" ↔ "Show less"

### Expanded Blocks (in order)

1. **The Approach** — AI direction as applied knowledge, not a workaround. Key line: *"Understanding the craft you're directing is part of directing it well."*
2. **The Workflow** — README-first sessions. Describe precisely, iterate, update README at end.
3. **The Tools** — Claude (pairing model). Minimal stack rationale.
4. **What Goes Wrong** — Three obstacle cards: Context Drift, Confident Wrong Answers, Scope Creep in Both Directions
5. **Why This Matters** — Contractor analogy. The method doesn't change what the thing is.

---

## Projects Section — The Bookcase

Built as a **literal bookcase** — one unified structure where each shelf is a project card. No max-width constraint — fills available section width.

### Bookcase Anatomy
- **Section background:** `#EDE6D8`
- **Uprights:** CSS-rendered wood columns, absolutely positioned spanning full height
- **Shelf back panels:** `#6B3A1F` — warm dark brown
- **Shelf ledges:** Horizontal planks with top highlight line and downward drop shadow
- **Top ledge:** Present above Shelf 1 only
- **Heavy base:** Bottom of the case

### Shelf 1 — Dad-a-Base (live)
- **Left:** Project number, title, description, stack tags, "Visit the site →" pill button with pulsing live dot
- **Right:** Live joke spotlight — exact replica of `.joke-spotlight` from Dad-a-Base
  - Placeholder joke always visible on load
  - Silently fetches from `https://dadabase.tobyziegler.com/random.php` and replaces if CORS allows
  - ⚠️ **Action needed:** Add `header('Access-Control-Allow-Origin: *');` to `random.php` before any output

### Shelves 2–6 (ghost)
- Faint number + label (e.g. "Project 02 — In development")
- Opacity 0.45 — present but clearly reserved

---

## Contact Section — Get in Touch

- **Heading:** *Let's talk about something real.*
- **Lede:** "I'm not hard to find, and I'm not hard to talk to..."
- **Tag / accent color:** Burgundy (`--accent-burg`)
- **Email link:** Displayed as HTML entities, `mailto:` assembled at runtime via JS — never appears as plain text in source
- **Form:** Minimal underline-only inputs; name + email side by side, message below; "Send it →" primary button
- **Reassurance line:** "No newsletters. No follow-up sequences. Just a reply."
- **Form action:** `contact.php` — built and in outputs; upload to document root alongside index.html
- **Error fallback:** Points back to email address (also JS-assembled, unicode-escaped in source)
- **Honeypot:** CSS-positioned off-screen field named `website`; server silently accepts if filled (bot detection)

---

## Footer

- **Background:** `--bg-dark`
- **Three-column grid:** Wordmark + tagline left / page nav links centre / other rooms right
- **Base bar:** Auto-updating copyright year (JS) + GitHub source link
- **Wordmark:** Italic Fraunces, "Toby Ziegler"
- **Tagline:** "Designer. Builder. Student of the craft."

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

- **`overflow: hidden` on `#hero`** — do not add this back. It creates a stacking context that traps the fixed nav, causing it to not cover content on scroll.
- **`</style>` tag** — must be present before `</head>`. Easy to lose during edits; always verify with `grep -c "</style>"`.
- **CORS on `random.php`** — required for live joke fetch from tobyziegler.com to dadabase.tobyziegler.com.
- **`contact.php`** — built; upload to document root alongside index.html. Not in version control (contains configuration).
- **Line numbers in VS Code** — word wrap causes visual line count to differ from actual. Toggle with `Option+Z`. True count: `wc -l index.html`.
- **VS Code format-on-save** — HTML formatter will reformat the file on save, changing line count from ~2065 to ~2300. Disable for HTML by adding `"[html]": { "editor.formatOnSave": false }` to User Settings JSON (`Cmd+Shift+P` → "Open User Settings JSON").
- **File truncation** — if the file ever seems to end abruptly, check with `grep -c "</html>"`. Should return 1. The script block and closing `</body></html>` are the last lines.

---

## Open Decisions

- [x] Color palette — settled
- [x] Section backgrounds — settled
- [x] Button style — pill-shaped, `border-radius: 1.2em`, `font-size: 1.2em`
- [x] Type scale — fluid root, all rem, enlarged ~25–50%
- [x] Hero headline — settled, exact wording and styling
- [x] Hero subhead — settled
- [x] All five sections — built
- [x] Footer — built
- [x] Email obfuscation — entities + JS assembly
- [x] Contact section — built including `contact.php` handler
- [x] Rooms — six named including resume subdomain
- [ ] Process heading — "The Madness of a Study" is working, not final
- [ ] Resume link placement — nav + contextual (not yet added to page)
- [ ] Resume subdomain — not yet built (see README-resume.md)
- [ ] Project shelf screenshots — placeholder in place for Shelf 1
- [ ] CORS header in `random.php`
- [x] `contact.php` — built; needs uploading to server document root
- [ ] Study metaphor in UI — explicit or just informing the design?

---

## Technical Baseline

- **Hosting:** Namecheap shared hosting (cPanel)
- **Deployment:** Git via cPanel
- **Stack:** PHP, HTML/CSS, vanilla JavaScript — no frameworks, no build step
- **SSL:** Recently resolved — monitor for full activation
- **Source:** github.com/TobyZiegler/tobyzieglerdotcom
- **Output:** Single `index.html` — all CSS and JS inline; only external dependency is Google Fonts

---

## How to Use This Document

At the start of any working session, paste this README into the conversation. Update it at the end of any session where decisions were made. Treat it as the single source of truth — if it's not in here, it hasn't been decided.

---

*Last updated: March 2026 — all sections complete; contact.php built with honeypot and rate limiting; email obfuscated; VS Code formatter gotcha documented; resume subdomain planned and briefed in README-resume.md*