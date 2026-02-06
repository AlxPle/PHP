# Stage 1 — Language Basics + PHP 8.x

> **Status:** 🚧 In Progress

## Goal
Master PHP syntax, core language constructs, and modern PHP 8.x features.

---

## Task Checklist

### Syntax
- [x] PHP tags (`<?php ... ?>`, short syntax)
- [x] Comments (`//`, `/* ... */`, `/** ... */`)
- [x] Output (`echo`, `print`, `var_dump`, `print_r`)
- [x] Strict typing (`declare(strict_types=1)`)

### Variables and Data Types
- [x] Variable declaration (`$name = value`)
- [x] Types: `string`, `int`, `float`, `bool`, `array`, `null`
- [x] Type juggling (automatic type conversion)
- [x] Type declarations (parameter and return types)
- [x] Union types (`int|string`)
- [x] Nullable types (`?string`)

### Operators
- [x] Arithmetic: `+`, `-`, `*`, `/`, `%`, `**`
- [x] Comparison: `==`, `===`, `!=`, `!==`, `<`, `>`, `<=`, `>=`
- [x] Logical: `&&`, `||`, `!`, `and`, `or`
- [x] Null coalescing: `??`, `??=`
- [x] Spaceship operator: `<=>`

### Conditionals
- [x] `if` / `else` / `elseif`
- [x] Ternary operator `? :`
- [x] `switch` / `case`
- [x] `match` expression (PHP 8.0+)

### Loops
- [x] `for` loop
- [x] `while` loop
- [x] `do-while` loop
- [x] `foreach` loop
- [x] `break` and `continue`

### Functions
- [x] Function declaration
- [x] Parameters (by value, by reference)
- [x] Default values
- [x] Return values (`return`)
- [x] Named arguments (PHP 8.0+)
- [x] Arrow functions (`fn() =>`)

### PHP 8.x Features
- [x] Enums (PHP 8.1+)
- [x] Constructor property promotion
- [x] Attributes
- [x] `readonly` properties (PHP 8.1+)
- [x] `match` expression

---

## Mini Projects

### Calculator
- [x] Create a calculator with basic operations
- [x] Use functions for each operation
- [x] Add error handling (division by zero)
- [x] Use `match` for operation selection

### String Processor
- [ ] Word count function
- [ ] String reverse function
- [ ] Search and replace function
- [ ] Use strict typing

---

## Stage Files

```
Stage1_Basics/
├── README.md
├── 01_syntax.php
├── 02_variables.php
├── 03_operators.php
├── 04_conditionals.php
├── 05_loops.php
├── 06_functions.php
├── 07_php8_features.php
├── projects/
│   ├── calculator.php
│   └── string_processor.php
└── notes/
    └── cheatsheet.md
```

---

## Resources

- [PHP Manual: Language Reference](https://www.php.net/manual/en/langref.php)
- [PHP 8.0 New Features](https://www.php.net/releases/8.0/en.php)
- [PHP 8.1 New Features](https://www.php.net/releases/8.1/en.php)
- [PHP 8.2 New Features](https://www.php.net/releases/8.2/en.php)
- [SymfonyCasts PHP Tutorials](https://symfonycasts.com/tracks/php)

---

## Completion Criteria

- [ ] All checklist tasks completed
- [ ] Mini projects work correctly
- [ ] Understand difference between `==` and `===`
- [ ] Can use `match` instead of `switch`
- [ ] Understand strict typing and its benefits
