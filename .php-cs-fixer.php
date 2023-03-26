<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->notPath([
        '.github',
    ])
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$rules = [
    '@PSR12' => true,
    'array_indentation' => true,
    'array_syntax' => ['syntax' => 'short'],
    'binary_operator_spaces' => true,
    'concat_space' => ['spacing' => 'one'],
    'explicit_string_variable' => true,
    'list_syntax' => ['syntax' => 'short'],
    'method_chaining_indentation' => true,
    'no_unused_imports' => true,
    'no_spaces_around_offset' => true,
    'no_superfluous_phpdoc_tags' => true,
    'no_whitespace_before_comma_in_array' => true,
    'ordered_imports' => ['sort_algorithm' => 'alpha'],
    'phpdoc_add_missing_param_annotation' => true,
    'phpdoc_no_empty_return' => true,
    'phpdoc_order' => true,
    'phpdoc_separation' => true,
    'phpdoc_var_annotation_correct_order' => true,
    'php_unit_construct' => true,
    'php_unit_dedicate_assert' => ['target' => 'newest'],
    'php_unit_dedicate_assert_internal_type' => ['target' => 'newest'],
    'php_unit_expectation' => ['target' => 'newest'],
    'php_unit_mock' => ['target' => 'newest'],
    'php_unit_mock_short_will_return' => true,
    'php_unit_no_expectation_annotation' => ['target' => 'newest'],
    'php_unit_test_annotation' => ['style' => 'prefix'],
    'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
    'single_quote' => true,
    'standardize_increment' => true,
    'standardize_not_equals' => true,
    'ternary_to_null_coalescing' => true,
];

$config = new PhpCsFixer\Config();
return $config->setRules($rules)->setFinder($finder);
