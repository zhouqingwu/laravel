<?php
/**
 * Config for PHP-CS-Fixer ver2
 */
$rules = [
    '@PSR2' => true,
    // addtional rules
    'array_syntax' => ['syntax' => 'short'],
    // 'no_multiline_whitespace_before_semicolons' => true,
    // 'no_short_echo_tag' => true,
    // 'no_unused_imports' => true,
    // 'not_operator_with_successor_space' => true,
];

$excludes = [
    // add exclude project directory
    'vendor',
    'node_modules',
];
return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude($excludes)
            ->notName('README.md')
            ->notName('*.xml')
            ->notName('*.yml')
    );

//base: https://github.com/laravel/framework/blob/5.4/.php_cs
//php-cs-fixer versioin 1 content: no use 
$fixers = [
    'blankline_after_open_tag',
    'braces',
    'concat_without_spaces',
    'double_arrow_multiline_whitespaces',
    'duplicate_semicolon',
    'elseif',
    'empty_return',
    'encoding',
    'eof_ending',
    'extra_empty_lines',
    'function_call_space',
    'function_declaration',
    'include',
    'indentation',
    'join_function',
    'line_after_namespace',
    'linefeed',
    'list_commas',
    'logical_not_operators_with_successor_space',
    'lowercase_constants',
    'lowercase_keywords',
    'method_argument_space',
    'multiline_array_trailing_comma',
    'multiline_spaces_before_semicolon',
    'multiple_use',
    'namespace_no_leading_whitespace',
    'no_blank_lines_after_class_opening',
    'no_empty_lines_after_phpdocs',
    'object_operator',
    'operators_spaces',
    'parenthesis',
    'phpdoc_indent',
    'phpdoc_inline_tag',
    'phpdoc_no_access',
    'phpdoc_no_package',
    'phpdoc_scalar',
    'phpdoc_short_description',
    'phpdoc_to_comment',
    'phpdoc_trim',
    'phpdoc_type_to_var',
    'phpdoc_var_without_name',
    'remove_leading_slash_use',
    'remove_lines_between_uses',
    'return',
    'self_accessor',
    'short_array_syntax',
    'short_echo_tag',
    'short_tag',
    'single_array_no_trailing_comma',
    'single_blank_line_before_namespace',
    'single_line_after_imports',
    'single_quote',
    'spaces_before_semicolon',
    'spaces_cast',
    'standardize_not_equal',
    'ternary_spaces',
    'trailing_spaces',
    'trim_array_spaces',
    'unalign_equals',
    'unary_operators_spaces',
    'unused_use',
    'visibility',
    'whitespacy_lines',
];
