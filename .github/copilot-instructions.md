# Copilot Instructions for This PHP Learning Repository

## Project Overview
- This repository is a structured, multi-stage PHP learning environment, not a production application.
- Code is organized by learning stages (see `Stages/`), each focusing on a core PHP topic (syntax, forms, sessions, OOP, APIs, etc.).
- The `Guides/` directory contains curated notes and code from external tutorials (e.g., YouTube courses).
- There are no complex frameworks or build systems; most code is plain PHP for clarity and learning.

## Key Conventions & Patterns
- **Stage folders** (e.g., `Stage1_Basics/`, `Stage2_Forms/`) contain topic-focused scripts and a `README.md` with checklists and learning goals.
- **Mini-projects** and exercises are found in later stages (see `Stage6_Projects/`).
- **OOP and API basics** are introduced in `Stage5_Structure_OOP/` and its subfolders.
- **No Composer or external dependencies** are required unless explicitly noted in a stage or guide.
- **Environment setup** is documented in `ENV_SETUP.md` (Fedora KDE, PHP CLI, local dev server via `php -S`).
- **Learning plan and progress** are tracked in `Learning_plan.md` (gamified, checklist style).

## Developer Workflows
- **Run scripts:** Use the built-in PHP server: `php -S localhost:8000` from the desired directory.
- **No automated tests or CI/CD** are present; this is a learning sandbox.
- **No database required** unless a specific stage/mini-project instructs otherwise (see `Stage4_Databases/`).
- **No autoloading or PSR standards** enforced unless a stage explicitly covers them.

## Project-Specific Guidance for AI Agents
- When generating new code, match the style and simplicity of existing stage scripts (single-file, procedural unless in OOP stages).
- Prefer clear, verbose variable names and inline comments for educational clarity.
- When adding new learning examples, update the relevant `README.md` checklist.
- Do not introduce frameworks, libraries, or advanced patterns unless the stage/guide covers them.
- Reference the most relevant stage or guide for any new topic or example.
- For environment or workflow changes, update `ENV_SETUP.md`.

## Key Files & Directories
- `Stages/` — main learning progression, each with its own `README.md`.
- `Guides/` — external resources and notes.
- `ENV_SETUP.md` — environment setup and workflow.
- `Learning_plan.md` — overall learning roadmap.

---
For any new code or documentation, prioritize clarity, educational value, and alignment with the staged learning structure. If unsure, review the most relevant stage's `README.md` for context.
