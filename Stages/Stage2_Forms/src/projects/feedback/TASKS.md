# Feedback Mini Project — Tasks (Self-Implementation)

## Goal
Build a simple PHP feedback app with files:
- `index.php`
- `process.php`
- `thank_you.php`
- `list.php`
- `data/feedbacks.json`

You should write all code yourself. This file gives only tasks and constraints.

---

## Stage 1 — `index.php` (Form UI)

### Task
Create a feedback form with fields:
- name
- email
- message

### Requirements
- Use `<form action="process.php" method="post">`
- Add labels and basic placeholders
- Add submit button
- Add link to `list.php`

### Done when
- Form renders correctly in browser
- Submit sends data to `process.php`

---

## Stage 2 — `process.php` (Validation + Sanitization)

### Task
Handle `POST` request, validate data, sanitize values.

### Requirements
- Check request method is POST
- Validate required fields (`name`, `email`, `message`)
- Validate email format (`filter_var(..., FILTER_VALIDATE_EMAIL)`)
- Sanitize/normalize input (`trim`, optional sanitize filters)
- Escape output when displaying errors (`htmlspecialchars`)

### Done when
- Invalid data shows readable errors
- Valid data continues to save step

---

## Stage 3 — Save to file (`data/feedbacks.json`)

### Task
Store valid feedback entries in JSON.

### Requirements
- Ensure `data` directory exists
- If JSON file does not exist, create it with empty array `[]`
- Read current JSON content and decode to array
- Append new feedback record:
  - `name`
  - `email`
  - `message`
  - `created_at` (ISO date)
- Encode and write back with `JSON_PRETTY_PRINT`

### Done when
- New entry appears in JSON file after each valid submit

---

## Stage 4 — Redirect to `thank_you.php`

### Task
After successful save, redirect user.

### Requirements
- Use `header('Location: thank_you.php')`
- Call `exit;` after redirect

### Done when
- Browser lands on thank-you page after success

---

## Stage 5 — `thank_you.php`

### Task
Create a simple success page.

### Requirements
- Show confirmation message
- Add links to:
  - `index.php` (send another feedback)
  - `list.php` (view all feedback)

### Done when
- Navigation works from thank-you page

---

## Stage 6 — `list.php` (Read + Display)

### Task
Display saved feedback entries from JSON.

### Requirements
- Read and decode `data/feedbacks.json`
- Handle empty file / invalid JSON gracefully
- Show each feedback item (name, email, message, created_at)
- Escape all displayed values with `htmlspecialchars`
- Add back link to `index.php`

### Done when
- All saved entries are shown safely

---

## Final polish (optional)
- Keep simple inline styles for readability
- Keep variable names descriptive
- Keep comments in English
