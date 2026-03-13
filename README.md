# Toby's Study — Project Brief & Living Document

> *This README serves as the running brief for tobyziegler.com. Paste it at the start of any working session to restore context. Update it as decisions are made.*

---

## What This Is

**Toby's Study** is the personal website of Toby Ziegler — graphic designer, document manager, project manager, and AI-directed software engineer. It lives at tobyziegler.com and serves as the central hub for a growing collection of showcase projects, each housed in its own subdomain.

The site makes an argument: that design thinking, domain expertise, and precise AI direction is a legitimate and interesting way to build real software. The projects are the proof.

---

## The Concept

The site is organized around the metaphor of **a study** — a personal space where work accumulates thoughtfully over time. Curated, not cluttered. A place that reflects the person who inhabits it.

Subdomains extend the metaphor as natural "rooms":

| Room | Subdomain | Purpose |
|---|---|---|
| **The Study** | tobyziegler.com | Main site — hub, identity, project showcase |
| **The Workshop** | workshop.tobyziegler.com *(future)* | Smaller works — scripts, experiments, utilities, photos |
| **Dad-a-Base** | dadabase.tobyziegler.com | First showcase project — live now |
| *More rooms to follow* | | |

Each room has its own personality but the same authorial voice. Same author, different register.

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
- Tells the truth about how things were built — including that Toby is an experienced coder who *chooses* to direct AI because it's faster, not because he can't
- Does not oversell or use corporate language
- Sounds like the Dad-a-Base "about" page — that's the benchmark

**Not:** A skills inventory. A resume in a browser. A template with a name on it.

---

## Visual Direction

### Relationship to Dad-a-Base
*Same author, different register.* The main site shares the component language and typographic system of Dad-a-Base but has its own distinct color palette. Cooler, more neutral — a study rather than a kitchen.

### Typography
- **Display / Headings:** Fraunces (variable serif — use italics deliberately)
- **Body / UI:** DM Sans
- These are non-negotiable. They are the thread connecting all rooms.

### Color Palette — Settled

| Role | Variable | Hex | Feel |
|---|---|---|---|
| Page background | `--bg` | `#F5F0E8` | Warm parchment — the walls |
| Dark surface | `--bg-dark` | `#1C1712` | Near-black warm — shelves, footer |
| Primary text | `--text` | `#2C1F14` | Deep espresso |
| Muted text | `--text-muted` | varies | Secondary copy |
| Primary accent | `--accent-green` | `#3A5C3B` | Forest green — the leather chair |
| Secondary accent | `--accent-burg` | `#7B2D3A` | Burgundy — the lamp, the book spine |
| Soft white | `--white-soft` | `#FAF7F2` | Breathing room |
| Rule / divider | `--rule` | subtle warm | Structural lines |

### Components
- Box, button, and card treatment carries over from Dad-a-Base
- Generous spacing, restrained motion
- Personality in the details — subtle, not shouty

### Decorative Elements
- Fewer than Dad-a-Base, but not eliminated
- No emoji overload — use sparingly and with intention
- Small graphic accents are fine; nothing cutesy

---

## Site Structure

### Phase 1 — Single Page
The initial build is a **single scrolling page**, architected to grow into multi-page navigation without a rebuild.

**Sections (in order):**
1. **Hero** — Name, thesis statement, immediate sense of who this is
2. **Projects — The Bookcase** — The showcase; Dad-a-Base is live, five shelves reserved
3. **About / The Philosophy** — The story: a lifetime of design thinking, the AI engineering turn, why it matters
4. **Process** — How this work gets made; show the method, not just the output *(not yet built)*
5. **Contact** — Human, not a buried form *(not yet built)*

### Navigation
- Fixed nav bar, transparent → frosted glass on scroll
- Not prominent in Phase 1 (single page, scroll-based)
- Architecture supports a full nav bar as pages are added
- No map widget — ever

### Resume
- Open question: dedicated page, or integrated into the main page?

---

## Settled Copy

### Hero Headline (4 lines, exact)
```
Like a conductor
with an orchestra,
I am directing AI to
build software with me.
```

- Line 4 (*"build software"*) is italic burgundy
- Lines animate in with staggered slide-up on load

### Hero Subhead
> Thirty years of design thinking. A precise hand on the baton.
> Come see what that looks like.

### Discipline Tags (right side, vertical)
- Graphic Design
- Document Management
- Project Management
- *(rule)*
- AI-Directed Engineering *(burgundy, active)*

### About Section
- Section tag: **"THE PHILOSOPHY"**
- Heading: *Design thinking meets the new tools.*
- Key framing: Toby is an experienced coder (PHP, HTML/CSS, and more — has built full sites). He directs AI because it's faster and better, not because he can't write code himself. "I could write this code myself — I have, many times — but AI does it faster."
- Pull quote: *"A conductor doesn't play every instrument. They know the score..."*
- Closing line: *"Taste and judgment aren't soft skills. They're the whole job."*

---

## The Projects Section — The Bookcase

The projects section is built as a **literal bookcase** — a single unified structure where each shelf is a project card. The SVG bookcase geometry (uprights, shelf ledges, back panels, heavy base) forms the structural UI. Content lives inside each shelf bay.

### Structure
- **Section background:** `#FFE4C4` (warm bisque — lighter than parchment, evokes a lit room)
- **Uprights:** CSS-rendered wood-grain columns, left and right
- **Shelf back panels:** Warm dark brown (`#6B3A1F`) — lightened to read as wood, not void
- **Shelf ledges:** Horizontal wood planks with highlight line and drop shadow; top ledge added above Shelf 1
- **Heavy base:** At the bottom of all shelves

### Shelf 1 — Dad-a-Base (live)
- **Left half:** Project title, description, stack tags, "Visit the site →" button with pulsing live dot
- **Right half:** Live joke spotlight — exact replica of the `.joke-spotlight` component from Dad-a-Base
  - Fetches from `https://dadabase.tobyziegler.com/random.php`
  - Placeholder joke shown on load; replaced silently if CORS allows
  - ⚠️ `random.php` needs `header('Access-Control-Allow-Origin: *');` for cross-subdomain fetch to work

### Shelves 2–6 (ghost)
- Empty shelves with faint number + label ("Project 02 — In development", etc.)
- Opacity 0.45 — present but clearly reserved

---

## Dad-a-Base Reference

- **Live:** dadabase.tobyziegler.com
- **Repo:** github.com/TobyZiegler/dadabase
- **Random joke endpoint:** `https://dadabase.tobyziegler.com/random.php`
  - Returns JSON: `{id, setup, punchline, submitted_by, status, ha_count, groan_count, created_at}`
- **Style variables:** `--cream: #FAF7F2`, `--warm-white: #FFFEF9`, `--espresso: #0F0804`, `--accent: #942E18`, `--accent-2: #1E4D44`, `--taupe: #5C4D3C`, `--brown: #2E1F12`

---

## The Thesis

> *A person with design judgment, systems thinking, and the ability to direct AI precisely can build real, production-grade software. Domain expertise and taste matter as much as syntax. Here is the proof.*

The headline on the page doesn't have to say this verbatim — but everything on the page should add up to it.

---

## What This Site Is Not

- Not a traditional developer portfolio
- Not a design agency site
- Not a resume with scroll effects
- Not a template
- Not trying to look like everyone else

---

## Open Decisions

- [x] Color palette — settled (see above)
- [x] Hero headline — settled (see above)
- [x] Projects section approach — bookcase UI
- [x] Section order — Hero → Projects → About → Process → Contact
- [x] About section framing — Toby as experienced coder who *chooses* AI direction
- [ ] Section final names (especially Process and Contact)
- [ ] Resume placement (own page vs. integrated)
- [ ] Contact approach (form, email link, something else)
- [ ] Whether the Study metaphor is made explicit in the UI or just informs the design
- [ ] Process section — not yet built
- [ ] Contact section — not yet built
- [ ] Screenshots for project cards (placeholder in place for Shelf 1)
- [ ] CORS header in `random.php` — needed for live joke fetch across subdomains

---

## Technical Baseline

- **Hosting:** Namecheap shared hosting (cPanel)
- **Deployment:** Git via cPanel
- **Stack:** PHP, HTML/CSS, vanilla JavaScript (no frameworks, no build step)
- **SSL:** Recently resolved — monitor for full activation
- **Source:** github.com/TobyZiegler/tobyzieglerdotcom
- **Output:** Single `index.html` — all CSS and JS inline, no external dependencies except Google Fonts

---

## How to Use This Document

At the start of any working session, paste this README into the conversation. Update it at the end of any session where decisions were made. Treat it as the single source of truth for the project — if it's not in here, it hasn't been decided.

---

*Last updated: March 2026 — hero, about, and projects sections built; bookcase UI settled; copy finalized for built sections*