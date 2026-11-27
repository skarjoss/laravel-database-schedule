# Change Log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [1.5.0] - 2026-11-26

### Added

- Support for Laravel 13.
- Support for `orchestra/testbench ^11.0` (PHP 8.3+) in the development environment.
- The `Schedule` model factory is now shipped with the package, so `Schedule::factory()` can be used in the tests of consuming applications.

### Changed

- Minimum requirements raised to Laravel 8 and PHP 7.3; Laravel 5.8, 6 and 7 are no longer supported (the model already relied on Laravel 8+ factories).
- The model factory moved from `database/factories` to `src/Database/Factories`.
- CI now runs PHPUnit on PHP 8.3 and 8.4.

### Removed

- `composer.lock` is no longer tracked; every install resolves its own dependency versions.

### Fixed

- The create and edit pages no longer fail with `Target class [App\Console\Kernel] does not exist` on applications without a custom console kernel (default since Laravel 11); the command list now resolves the console kernel via its contract.
- Bootstrap pagination is now enabled on Laravel 10 and later; the version check only looked at the first character of the framework version.

## [1.4.4] - 2026-02-14

### Added

- Support for Laravel 12.

## [1.4.2] - 2025-07-21

### Fixed

- The schedule no longer tries to load tasks from the database when the `migrations` table does not exist yet.

## [1.4.1] - 2024-11-18

### Changed

- The package was renamed from `robersonfaria/laravel-database-schedule` to `skarjoss/laravel-database-schedule`.

### Fixed

- Options of type `function` are now evaluated with `eval`, matching the behavior already used for arguments.

## [1.4.0] - 2024-04-04

### Added

- Support for Laravel 11.

## [1.3.0] - 2022-03-02

### Changed

 - Arguments fix: details in [pull request](https://github.com/robersonfaria/laravel-database-schedule/pull/51)

## [1.3.1] - 2022-03-02

### Changed

- Update README.md

### Fixed

- Fixed error in running jobs with arguments of type function (test created to validate)