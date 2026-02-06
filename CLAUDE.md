# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

PHP library demonstrating two model design patterns using modern PHP 8.5+ features: a mutable model (`Person`) and an immutable/controlled model (`PersonCapsule`). Namespace: `Hidenari\ModelSample`.

## Commands

```bash
# Install dependencies
composer install

# Run tests
./vendor/bin/pest

# Run tests with coverage
herd coverage ./vendor/bin/pest --coverage

# Run a single test file
./vendor/bin/pest tests/Unit/PersonTest.php

# Run a specific test by name
./vendor/bin/pest --filter="test name here"

# Code formatting (Laravel Pint)
./vendor/bin/pint

# Static analysis (max strictness)
./vendor/bin/phpstan analyse src --level=10
```

Before committing, run all four checks from the Update Rules: coverage, pest, pint, and phpstan.

## Architecture

### Two Model Patterns

- **Person** (`src/Person.php`) — Mutable model using PHP 8.1 property hooks (`get`/`set`). Properties are publicly readable and writable. Getters add prefixes (e.g., `'Mr.' . $this->name`), setters normalize values (e.g., `ucwords()`).

- **PersonCapsule** (`src/PersonCapsule.php`) — Controlled-mutation model using PHP 8.4 `private(set)` properties. Public read access via getters, mutation only through explicit `setName()`/`setAge()` methods.

Both models share the same validation logic and enum integration.

### Validation Strategy

Two complementary approaches:

1. **Attribute-based** — `ValidateLength` (`src/Validate/ValidateLength.php`) is a PHP attribute applied to properties. At runtime, `ValidateNameLength` trait reads the attribute via `ReflectionProperty` to enforce string length constraints (uses `mb_strlen` for multibyte support).

2. **Trait-based** — `ValidateOverFifteen` trait (`src/Validate/ValidateOverFifteen.php`) enforces age >= 15 directly.

Both traits are composed into `Person` and `PersonCapsule`.

### Interfaces

Separate interface pairs define contracts for mutable vs. capsule patterns:
- `NameInterface` / `NameCapsuleInterface` — name property access
- `AgeInterface` / `AgeCapsuleInterface` — age property access

### Enum

`GradeEnum` (`src/Enum/GradeEnum.php`) — GOLD/SILVER/BRONZE with `upGrade()`/`downGrade()` business logic methods. Uses `#[NoDiscard]` attribute to warn if return values are ignored.

## Testing

Tests use PestPHP in `tests/Unit/`. Test files follow `*Test.php` naming convention. Tests cover property access, validation boundaries, enum transitions, and exception cases using Pest's `expect()` API and `->throws()` for exception assertions.

## Code Quality

- PHPStan at level 10 (maximum strictness)
- Laravel Pint for code formatting
- PHP 8.5+ required
