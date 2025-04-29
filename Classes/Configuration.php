<?php

namespace LintKit\PhpCodingStandardsConfig;

use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

class Configuration {

	protected Finder $finder;

	protected Config $config;

	protected string $dir;

	public function __construct()
	{
		$this->config = new Config();
		$this->finder = Finder::create();
		$this->dir = $GLOBALS['_SERVER']['PWD'];
	}

	public function getConfiguration(): ConfigInterface
	{
		return $this->config->setIndent("\t")
			->setCacheFile('.cache/.phpcscache_' . md5($this->dir))
			->setParallelConfig(ParallelConfigFactory::detect())
			->setRules($this->getRules())
			->setFinder($this->getFilteredFinder())
		;
	}

	protected function getRules(): array
	{
		return [
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
			'phpdoc_no_access' => true,
			'single_line_comment_style' => true,
			'single_space_around_construct' => true,
			'statement_indentation' => true,
			'ternary_operator_spaces' => true,
			'trailing_comma_in_multiline' => true,
			'type_declaration_spaces' => true,
			'unary_operator_spaces' => true,
		];
	}

	protected function getFilteredFinder(): Finder
	{
			// General
		$this->finder->exclude('Library')
			->exclude('vendor')
			->exclude('var')

			->ignoreDotFiles(true)
			->ignoreUnreadableDirs()

			->in($this->dir)
		;

		if (is_file($this->dir . '/.gitignore')) {
			$this->finder = $this->finder->ignoreVCSIgnored(true);
		}

		return $this->finder;
	}
}
