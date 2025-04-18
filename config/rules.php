<?php
$config = new PhpCsFixer\Config();

return $config
	->setIndent("\t")
	->setCacheFile('.cache/.phpcscache_' . md5($dir))
	->setParallelConfig(\PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
	->setRules([
		'@PSR12' => true,
		'align_multiline_comment' => true,
		'array_indentation' => true,
		'array_syntax' => ['syntax' => 'short'],
		'array_syntax' => true,
		'blank_line_after_opening_tag' => true,
		'cast_spaces' => ['space' => 'none'],
		'class_attributes_separation' => [
			'elements' => [
				'const' => 'one',
				'method' => 'one',
				'property' => 'one',
			],
		],
		'concat_space' => ['spacing' => 'one'],
		'include' => true,
		'lowercase_cast' => true,
		'lowercase_static_reference' => true,
		'magic_constant_casing' => true,
		'method_argument_space' => [
			'attribute_placement' => 'same_line',
			'keep_multiple_spaces_after_comma' => false,
			'on_multiline' => 'ensure_fully_multiline',
		],
		'multiline_whitespace_before_semicolons' => [
			'strategy' => 'new_line_for_chained_calls',
		],
		'no_alternative_syntax' => true,
		'no_empty_comment' => true,
		'no_empty_phpdoc' => true,
		'no_empty_statement' => false,
		'no_leading_import_slash' => true,
		'no_multiline_whitespace_around_double_arrow' => true,
		'no_superfluous_phpdoc_tags' => true,
		'no_whitespace_in_blank_line' => true,
		'normalize_index_brace' => true,
		'ordered_class_elements' => true,
		'ordered_imports' => [
			'sort_algorithm' => 'alpha',
		],
		'single_line_comment_style' => true,
		'single_space_around_construct' => true,
		'statement_indentation' => true,
		'ternary_operator_spaces' => true,
		'tailing_comma_in_multiline' => true,
		'type_declaration_spaces' => true,
		'unary_operator_spaces' => true,
	])
;
