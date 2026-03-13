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
- Tells the truth about how things were built
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

### Components
- Box, button, and card treatment carries over from Dad-a-Base
- Generous spacing, restrained motion
- Personality in the details — subtle, not shouty

### Color — Classic Study Palette

The palette evokes a well-loved personal study — comfortable, inviting, classy. Warm but not folksy. Traditional but not stale.

| Role | Color | Feel |
|---|---|---|
| Background | Warm parchment / aged linen | The walls |
| Primary text | Deep espresso brown | Readable, grounded |
| Primary accent | Forest green | The leather chair |
| Secondary accent | Burgundy / oxblood | The lamp, the spine of a book |
| Highlight | Soft warm white | Breathing room |
| Dark surface | Near-black with warm undertone | Shelves, footer |

The greens and burgundies carry the personality. The parchment and espresso do the heavy lifting. Nothing cold, nothing corporate.

More modern and non-traditional palettes are reserved for other rooms (Workshop, future projects). The Study is the welcoming, classic home base.

### Decorative Elements
- Fewer than Dad-a-Base, but not eliminated
- No emoji overload — use sparingly and with intention
- Small graphic accents are fine; nothing cutesy

### Video Background
- Conceptually appealing for the hero section
- Tabled for now due to reliability/UX concerns
- Revisit once core site is stable

---

## Site Structure

### Phase 1 — Single Page
The initial build is a **single scrolling page**, architected to grow into multi-page navigation without a rebuild.

**Proposed sections (order TBD):**
1. **Hero** — Name, thesis statement, immediate sense of who this is
2. **About / The Argument** — The story: 30 years of design, the AI engineering turn, why it matters
3. **Projects** — Scrolling gallery of showcase projects, hero-style cards; Dad-a-Base is first
4. **Process** — How this work gets made; show the method, not just the output
5. **Contact** — Human, not a buried form

### Navigation
- Not prominent in Phase 1 (single page, scroll-based)
- Architecture should support a nav bar appearing as pages are added
- No map widget — ever

### Resume
- Open question: dedicated page, or integrated into the main page?
- The uploaded resume (TobyZiegler_Resume2026.docx) is the current version

---

## The Projects Gallery

Projects are the heart of the site. Each card in the gallery should convey:
- What it is (name, one-line description)
- What it demonstrates (the skill or method on display)
- A link to the live project
- A link to the case study / "how this was built" page

**Current projects:**
- ✅ **Dad-a-Base** — dadabase.tobyziegler.com — full-stack joke database; PHP 8.1, MySQL, vanilla JS

**Planned:**
- 5–6 additional showcase projects (TBD)

---

## The Thesis

This is the argument the site makes, in plain language:

> *A person with design judgment, systems thinking, and the ability to direct AI precisely can build real, production-grade software. Domain expertise and taste matter as much as syntax. Here is the proof.*

The headline on the page doesn't have to say this verbatim — but everything on the page should add up to it.

---

## Hero Headline

The working headline direction:

> *"Like a conductor with an orchestra, I direct AI to build software with me. Come see what that looks like."*

The conductor metaphor is the core idea — it implies skill, authority, and collaboration without claiming to play every instrument. "Come see what that looks like" is an invitation, not a sales pitch. Exact wording to be refined during build.

---

## What This Site Is Not

- Not a traditional developer portfolio
- Not a design agency site
- Not a resume with scroll effects
- Not a template
- Not trying to look like everyone else

---

## Open Decisions

These are unresolved as of the last update. Resolve before or during build:

- [x] Color palette — Classic Study (parchment, espresso, forest green, burgundy)
- [x] Hero headline direction — conductor metaphor (exact wording to refine during build)
- [ ] Section order and final names
- [ ] Resume placement (own page vs. integrated)
- [ ] Contact approach (form, email link, something else)
- [ ] Whether the Study metaphor is made explicit in the UI or just informs the design

---

## Technical Baseline

- **Hosting:** Namecheap shared hosting (cPanel)
- **Deployment:** Git via cPanel
- **Stack:** PHP, HTML/CSS, vanilla JavaScript (no frameworks, no build step)
- **SSL:** Recently resolved — monitor for full activation
- **Source:** github.com/TobyZiegler/tobyzieglerdotcom

---

## How to Use This Document

At the start of any working session, paste this README into the conversation. Update it at the end of any session where decisions were made. Treat it as the single source of truth for the project — if it's not in here, it hasn't been decided.

---

*Last updated: March 2026 — palette and hero headline direction settled; ready to build*