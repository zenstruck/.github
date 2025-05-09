<?php

if (!isset($finder)) {
    $finder = PhpCsFixer\Finder::create()
        ->in([__DIR__.'/src', __DIR__.'/tests'])
    ;
}

$config = new PhpCsFixer\Config();
$package = \json_decode(\file_get_contents(__DIR__.'/composer.json'), true)['name'];

return $config
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@DoctrineAnnotation' => true,
        '@PHP80Migration' => true,
        '@PHP80Migration:risky' => true,
        '@PHPUnit75Migration:risky' => true,
        //'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
        'multiline_comment_opening_closing' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => [
            'imports_order' => ['const', 'class', 'function'],
        ],
        'ordered_class_elements' => true,
        'native_function_invocation' => ['include' => ['@internal']],
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'string_implicit_backslashes' => ['single_quoted' => 'ignore'],
        'mb_str_functions' => true,
        'logical_operators' => true,
        'php_unit_method_casing' => ['case' => 'snake_case'],
        'php_unit_test_annotation' => ['style' => 'annotation'],
        'no_unreachable_default_argument_value' => true,
        'declare_strict_types' => false,
        'void_return' => false,
        'single_trait_insert_per_statement' => false,
        'simple_to_complex_string_variable' => true,
        'no_superfluous_phpdoc_tags' => [
            'allow_mixed' => true,
            'allow_unused_params' => true,
            'remove_inheritdoc' => true,
        ],
        'phpdoc_to_comment' => false,
        'function_declaration' => ['closure_function_spacing' => 'none', 'closure_fn_spacing' => 'none'],
        'nullable_type_declaration_for_default_null_value' => true,
        'phpdoc_types_order' => ['null_adjustment' => 'none', 'sort_algorithm' => 'none'],
        'phpdoc_separation' => false,
        'header_comment' => ['header' => "This file is part of the {$package} package.\n\n(c) Kevin Bond <kevinbond@gmail.com>\n\nFor the full copyright and license information, please view the LICENSE\nfile that was distributed with this source code."],
        'method_argument_space' => ['on_multiline' => 'ignore'],
        'trailing_comma_in_multiline' => ['elements' => ['arrays', 'match', 'parameters']],
        'random_api_migration' => false,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
