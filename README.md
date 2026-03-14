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
- Pill-shaped: `border-radius: 100px`
- Large text: `font-size: 1.05rem`
- Applies to all buttons site-wide

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
| Projects | `#FFE4C4` | Warm bisque — lighter, evokes a lit room |
| About | `#F5F0E8` | Base parchment |
| Process | `#EDE6D8` | Barely darker than parchment — enough to read as distinct |
| Contact | TBD | |
| Footer | `#1C1712` | `--bg-dark` |

### Decorative Elements
- Fewer than Dad-a-Base, but not eliminated
- No emoji overload — use sparingly and with intention
- Small graphic accents are fine; nothing cutesy

---

## Site Structure

### Phase 1 — Single Scrolling Page
Architected to grow into multi-page navigation without a rebuild.

**Sections in order:**

| # | Section | Tag | Status |
|---|---|---|---|
| 1 | Hero | — | Built |
| 2 | Projects | The Bookcase | Built |
| 3 | About | The Philosophy | Built |
| 4 | Process | The Method | Built |
| 5 | Contact | TBD | Not yet built |

### Navigation
- Fixed nav bar, transparent → frosted glass on scroll (`nav.scrolled`)
- Minimal in Phase 1; architecture supports full nav as pages are added
- No map widget — ever

### Resume
- Open question: dedicated page, or integrated?

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

### Hero Subhead (exact)

> Thirty years of design thinking. A precise hand on the baton.
> Let me share with you what that looks like for me.

### Discipline Tags (hero, right side, vertical)
- Graphic Design
- Document Management
- Project Management
- *(decorative rule)*
- AI-Directed Engineering *(burgundy, styled as active)*

### Hero Buttons
- Primary: "See the work →" — green filled, links to `#projects`
- Secondary: "How it's made →" — outline, links to `#process`

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
- **Lede:** Origin story. The idea of a comfortable landing page, turned into a study, with rooms branching off. The place is intended to be welcoming, inviting, and from a real person. Key line: *"a comfortable place on the internet that feels like home."*
- **Body (always visible):** Introduces the rooms concept; frames the work as thirty years of design thinking combined with new tools used deliberately.
- **Expand button:** "See how it really works" ↔ "Show less"

### Expanded Blocks (in order)

1. **The Approach** — AI direction as applied knowledge, not a workaround. Coding background makes the direction better. Key line: *"Understanding the craft you're directing is part of directing it well."*
2. **The Workflow** — README-first sessions. Describe precisely, iterate, update README at end. The document is the memory.
3. **The Tools** — Claude (computer use / pairing model changes the texture of the work). Minimal stack: PHP, HTML, CSS, vanilla JS — simplicity is a virtue, complexity is places for things to break.
4. **What Goes Wrong** — Three obstacle cards:
   - *Context Drift* — earlier decisions quietly contradicted by later ones; README is the fix
   - *Confident Wrong Answers* — output looks right and quietly isn't; experience is what tells you which answers to double-check
   - *Scope Creep in Both Directions* — AI adds unwanted features, or vague brief gets technically correct but wrong-in-spirit result; precision in the brief is the only fix
5. **Why This Matters** — Answers "does it count?"; contractor analogy; the method doesn't change what the thing is.

---

## Projects Section — The Bookcase

Built as a **literal bookcase** — one unified structure where each shelf is a project card.

### Bookcase Anatomy
- **Section background:** `#FFE4C4` — warm bisque; header text in espresso (dark on light)
- **Uprights:** CSS-rendered wood-grain columns, absolutely positioned spanning full height
- **Shelf back panels:** `#6B3A1F` — warm dark brown, reads as wood not void
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

## Open Decisions

- [x] Color palette — settled
- [x] Section backgrounds — settled per section
- [x] Button style — pill-shaped, large text
- [x] Hero headline — settled, exact wording and styling
- [x] Hero subhead — settled
- [x] Section order — Hero → Projects → About → Process → Contact
- [x] About section — copy and framing settled
- [x] Process section — built; expanded blocks settled; heading is working title
- [x] Projects section — bookcase UI fully built
- [x] Rooms — five named and documented
- [ ] Process heading — "The Madness of a Study" is working, not final
- [ ] Contact section — not yet built
- [ ] Resume — own page vs. integrated
- [ ] Contact approach — form, email link, or other
- [ ] Study metaphor in UI — explicit or just informing the design?
- [ ] Project shelf screenshots — placeholder in place for Shelf 1
- [ ] CORS header in `random.php` — required for live joke fetch across subdomains

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

*Last updated: March 2026 — all four built sections complete; rooms expanded to five; buttons, copy, section backgrounds, and process section all settled*