# Feedback Mini Project — Execution Plan

## Recommended order (3 focused sessions)

### Session 1 (Foundation)
1. Build `index.php` form
2. Implement minimal `process.php` method check
3. Add basic validation and error output

Outcome: invalid input is blocked and explained.

### Session 2 (Persistence)
1. Create/read `data/feedbacks.json`
2. Implement append logic for new feedback
3. Redirect to `thank_you.php` on success

Outcome: valid input is stored and flow is complete.

### Session 3 (Read side)
1. Build `list.php`
2. Render all feedback records safely
3. Add navigation links between pages

Outcome: mini-project works end-to-end.

---

## Timebox suggestion
- Session 1: 45–60 min
- Session 2: 45–60 min
- Session 3: 30–45 min
- Buffer/debug: 20 min

Total: ~2.5–3 hours

---

## Rules for this training task
- Write code yourself (no copy-paste full solution)
- Keep code simple and readable
- Escape all HTML output (`htmlspecialchars`)
- Validate first, save second
- Redirect only after successful save
