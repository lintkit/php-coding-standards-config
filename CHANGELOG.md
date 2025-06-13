# 2.0.0

**13th June 2025**

#### Features

- [BREAKING] Create a TYPO3 specific config (`.typo3.php-cs-fixer.php`) - require this if you previously included `.php-cs-fixer.php`

#### Rules

- Sort `use` alphabetically
- Enforce better multiline syntax
- Add more rules
    - `phpdoc_no_access => true,`
    - `ordered_class_elements => true,`
	- `align_multiline_comment => true,`
	- `no_empty_phpdoc => true,`
	- `no_superfluous_phpdoc_tags => true,`
	- `phpdoc_no_useless_inheritdoc => true,`
	- `no_leading_import_slash => true,`
	- `single_line_comment_style => true,`
	- `no_empty_comment => true,`
	- `normalize_index_brace => true,`
	- `no_multiline_whitespace_around_double_arrow => true,`
	- `array_syntax => true,`

# 1.2.0

**11th October 2024**

#### Features

- Add TYPO3 v12 paths

# 1.1.1

**5th September 2024**

#### Revert

- Remove `no_unused_imports` for now as it also removes classes with the same namespace

# 1.1.0

**4th September 2024**

#### Rules

- Add `no_unused_imports` rule

# 1.0.0

**5th August 2024**

#### Feat

- Version 1 release
