# Feedback Mini Project — Checkpoints

Mark each checkpoint only after manual verification in browser.

## Checkpoint A — Form submits
- [x] `index.php` contains form with `name`, `email`, `message`
- [x] Form submits to `process.php`
- [x] `method="post"` is used

## Checkpoint B — Validation works
- [x] Empty fields produce errors
- [x] Invalid email produces error
- [x] Errors are readable and escaped

## Checkpoint C — JSON saving works
- [x] `data/feedbacks.json` is created if missing
- [x] Valid submit appends one new JSON object
- [x] Existing data is preserved after append

## Checkpoint D — Redirect flow works
- [x] Valid submit redirects to `thank_you.php`
- [x] `process.php` does not output extra text before `header()`

## Checkpoint E — List page works
- [x] `list.php` reads JSON and renders entries
- [x] Empty state works when no records
- [x] Output is escaped with `htmlspecialchars`

## Checkpoint F — End-to-end
- [x] Create 2-3 feedback messages
- [x] See all on `list.php`
- [x] No PHP warnings/errors in browser
- [x] Links between all pages work
