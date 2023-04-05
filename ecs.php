<?php
declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    // this way you add a single rule
    $ecsConfig->rules([
        \PhpCsFixer\Fixer\Operator\LogicalOperatorsFixer::class,
        \PhpCsFixer\Fixer\Comment\MultilineCommentOpeningClosingFixer::class,
        \PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer::class,
        \PhpCsFixer\Fixer\ClassNotation\NoNullPropertyInitializationFixer::class,
        \PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer::class,
        \PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer::class,
        \PhpCsFixer\Fixer\StringNotation\SimpleToComplexStringVariableFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocOrderFixer::class,
        \PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer::class,
        \PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer::class,
        \PhpCsFixer\Fixer\ReturnNotation\ReturnAssignmentFixer::class,
        \PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class,
        \PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer::class,
        \PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer::class,
        \PhpCsFixer\Fixer\Casing\ConstantCaseFixer::class,
        \PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer::class,
        \PhpCsFixer\Fixer\Import\NoUnusedImportsFixer::class,
        \PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer::class,
        \PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer::class,
        \PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer::class,
        \PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer::class,
        \PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer::class,
        \PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer::class,
        \PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer::class,
        \PhpCsFixer\Fixer\Basic\BracesFixer::class,
        \PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer::class,
        \PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\NoSuperfluousPhpdocTagsFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer::class,
        \PhpCsFixer\Fixer\Import\OrderedImportsFixer::class,
        \PhpCsFixer\Fixer\CastNotation\CastSpacesFixer::class,
        \PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer::class,
    ]);

    $ecsConfig->skip([
        \PhpCsFixer\Fixer\Whitespace\BlankLineBetweenImportGroupsFixer::class,
        \PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer::class,
        \PhpCsFixer\Fixer\Operator\ConcatSpaceFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer::class,
        \PhpCsFixer\Fixer\StringNotation\HeredocToNowdocFixer::class,
        \PhpCsFixer\Fixer\Whitespace\HeredocIndentationFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocAddMissingParamAnnotationFixer::class,
        \PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer::class => false,
        \PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer::class,
        \PhpCsFixer\Fixer\FunctionNotation\SingleLineThrowFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer::class,
        \PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer::class,
        \PhpCsFixer\Fixer\Operator\IncrementStyleFixer::class,
        \PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer::class,
        \PhpCsFixer\Fixer\PhpUnit\PhpUnitInternalClassFixer::class,
        \PhpCsFixer\Fixer\PhpUnit\PhpUnitTestClassRequiresCoversFixer::class,
        \PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer::class,
    ]);

    // this way you can add sets - group of rules
    $ecsConfig->sets([
        SetList::PSR_12,
        SetList::DOCTRINE_ANNOTATIONS,
    ]);
};
