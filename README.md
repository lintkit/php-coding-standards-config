# LintKit: PHP Coding Standards Config

Liquid Light base configuration for PHP

## Usage

Install the dependency:

```bash
composer require --dev lintkit/php-coding-standards-config
```

Add the scripts:

```json
"scripts": {
    "lint:php:cs-fixer:fix": "php-cs-fixer fix --config vendor/lintkit/php-coding-standards-config/.php-cs-fixer.php -v --diff",
    "lint:php:cs-fixer": "@lint:php:cs-fixer:fix --dry-run"
},
```

Add to `.gitignore`

```
.cache
```

### TYPO3

If using LintKit with TYPO3, you can require `.typo3.php-cs-fixer.php` of `.php-cs-fixer.php` to exclude TYPO3-related directories