<?php

declare(strict_types=1);

/**
 * #logic 做事不讲究逻辑，再努力也只是重复犯错
 * ## 何为相思：不删不聊不打扰，可否具体点：曾爱过。何为遗憾：你来我往皆过客，可否具体点：再无你。
 * ## 摔倒一次可以怪路不平鞋不正，在同一个地方摔倒两次，只能怪自己和自己和解，无不是一个不错的选择。
 * @version 1.0.0
 * @author @小小只^v^ <littlezov@qq.com>  littlezov@qq.com
 * @link     https://github.com/littlezo
 * @document https://github.com/littlezo/wiki
 * @license  https://github.com/littlezo/MozillaPublicLicense/blob/main/LICENSE
 *
 */

use ECSPrefix202302\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use PhpCsFixer\Fixer\Alias\ArrayPushFixer;
use PhpCsFixer\Fixer\Alias\BacktickToShellExecFixer;
use PhpCsFixer\Fixer\Alias\EregToPregFixer;
use PhpCsFixer\Fixer\Alias\ModernizeStrposFixer;
use PhpCsFixer\Fixer\Alias\NoAliasLanguageConstructCallFixer;
use PhpCsFixer\Fixer\Alias\NoMixedEchoPrintFixer;
use PhpCsFixer\Fixer\Alias\PowToExponentiationFixer;
use PhpCsFixer\Fixer\Alias\RandomApiMigrationFixer;
use PhpCsFixer\Fixer\Alias\SetTypeToCastFixer;
use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\ArrayNotation\NoMultilineWhitespaceAroundDoubleArrowFixer;
use PhpCsFixer\Fixer\ArrayNotation\NormalizeIndexBraceFixer;
use PhpCsFixer\Fixer\ArrayNotation\NoWhitespaceBeforeCommaInArrayFixer;
use PhpCsFixer\Fixer\ArrayNotation\TrimArraySpacesFixer;
use PhpCsFixer\Fixer\ArrayNotation\WhitespaceAfterCommaInArrayFixer;
use PhpCsFixer\Fixer\Basic\BracesFixer;
use PhpCsFixer\Fixer\Basic\EncodingFixer;
use PhpCsFixer\Fixer\Basic\NonPrintableCharacterFixer;
use PhpCsFixer\Fixer\Basic\NoTrailingCommaInSinglelineFixer;
use PhpCsFixer\Fixer\Basic\PsrAutoloadingFixer;
use PhpCsFixer\Fixer\Casing\ClassReferenceNameCasingFixer;
use PhpCsFixer\Fixer\Casing\ConstantCaseFixer;
use PhpCsFixer\Fixer\Casing\IntegerLiteralCaseFixer;
use PhpCsFixer\Fixer\Casing\LowercaseKeywordsFixer;
use PhpCsFixer\Fixer\Casing\LowercaseStaticReferenceFixer;
use PhpCsFixer\Fixer\Casing\MagicConstantCasingFixer;
use PhpCsFixer\Fixer\Casing\MagicMethodCasingFixer;
use PhpCsFixer\Fixer\Casing\NativeFunctionCasingFixer;
use PhpCsFixer\Fixer\Casing\NativeFunctionTypeDeclarationCasingFixer;
use PhpCsFixer\Fixer\CastNotation\CastSpacesFixer;
use PhpCsFixer\Fixer\CastNotation\LowercaseCastFixer;
use PhpCsFixer\Fixer\CastNotation\ModernizeTypesCastingFixer;
use PhpCsFixer\Fixer\CastNotation\NoShortBoolCastFixer;
use PhpCsFixer\Fixer\CastNotation\NoUnsetCastFixer;
use PhpCsFixer\Fixer\CastNotation\ShortScalarCastFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\ClassNotation\ClassDefinitionFixer;
use PhpCsFixer\Fixer\ClassNotation\NoBlankLinesAfterClassOpeningFixer;
use PhpCsFixer\Fixer\ClassNotation\NoNullPropertyInitializationFixer;
use PhpCsFixer\Fixer\ClassNotation\NoPhp4ConstructorFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedClassElementsFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedInterfacesFixer;
use PhpCsFixer\Fixer\ClassNotation\OrderedTraitsFixer;
use PhpCsFixer\Fixer\ClassNotation\ProtectedToPrivateFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfAccessorFixer;
use PhpCsFixer\Fixer\ClassNotation\SelfStaticAccessorFixer;
use PhpCsFixer\Fixer\ClassNotation\SingleClassElementPerStatementFixer;
use PhpCsFixer\Fixer\ClassNotation\SingleTraitInsertPerStatementFixer;
use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\ClassUsage\DateTimeImmutableFixer;
use PhpCsFixer\Fixer\Comment\CommentToPhpdocFixer;
use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use PhpCsFixer\Fixer\Comment\NoEmptyCommentFixer;
use PhpCsFixer\Fixer\Comment\NoTrailingWhitespaceInCommentFixer;
use PhpCsFixer\Fixer\Comment\SingleLineCommentSpacingFixer;
use PhpCsFixer\Fixer\Comment\SingleLineCommentStyleFixer;
use PhpCsFixer\Fixer\ControlStructure\ControlStructureContinuationPositionFixer;
use PhpCsFixer\Fixer\ControlStructure\ElseifFixer;
use PhpCsFixer\Fixer\ControlStructure\EmptyLoopBodyFixer;
use PhpCsFixer\Fixer\ControlStructure\EmptyLoopConditionFixer;
use PhpCsFixer\Fixer\ControlStructure\IncludeFixer;
use PhpCsFixer\Fixer\ControlStructure\NoAlternativeSyntaxFixer;
use PhpCsFixer\Fixer\ControlStructure\NoBreakCommentFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUnneededControlParenthesesFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUnneededCurlyBracesFixer;
use PhpCsFixer\Fixer\ControlStructure\NoUselessElseFixer;
use PhpCsFixer\Fixer\ControlStructure\SimplifiedIfReturnFixer;
use PhpCsFixer\Fixer\ControlStructure\SwitchCaseSemicolonToColonFixer;
use PhpCsFixer\Fixer\ControlStructure\SwitchCaseSpaceFixer;
use PhpCsFixer\Fixer\ControlStructure\SwitchContinueToBreakFixer;
use PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer;
use PhpCsFixer\Fixer\ControlStructure\YodaStyleFixer;
use PhpCsFixer\Fixer\DoctrineAnnotation\DoctrineAnnotationArrayAssignmentFixer;
use PhpCsFixer\Fixer\FunctionNotation\CombineNestedDirnameFixer;
use PhpCsFixer\Fixer\FunctionNotation\FopenFlagOrderFixer;
use PhpCsFixer\Fixer\FunctionNotation\FunctionDeclarationFixer;
use PhpCsFixer\Fixer\FunctionNotation\FunctionTypehintSpaceFixer;
use PhpCsFixer\Fixer\FunctionNotation\ImplodeCallFixer;
use PhpCsFixer\Fixer\FunctionNotation\LambdaNotUsedImportFixer;
use PhpCsFixer\Fixer\FunctionNotation\MethodArgumentSpaceFixer;
use PhpCsFixer\Fixer\FunctionNotation\NoSpacesAfterFunctionNameFixer;
use PhpCsFixer\Fixer\FunctionNotation\PhpdocToReturnTypeFixer;
use PhpCsFixer\Fixer\FunctionNotation\RegularCallableCallFixer;
use PhpCsFixer\Fixer\FunctionNotation\ReturnTypeDeclarationFixer;
use PhpCsFixer\Fixer\FunctionNotation\SingleLineThrowFixer;
use PhpCsFixer\Fixer\FunctionNotation\UseArrowFunctionsFixer;
use PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer;
use PhpCsFixer\Fixer\Import\FullyQualifiedStrictTypesFixer;
use PhpCsFixer\Fixer\Import\GlobalNamespaceImportFixer;
use PhpCsFixer\Fixer\Import\NoLeadingImportSlashFixer;
use PhpCsFixer\Fixer\Import\NoUnneededImportAliasFixer;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use PhpCsFixer\Fixer\Import\OrderedImportsFixer;
use PhpCsFixer\Fixer\Import\SingleImportPerStatementFixer;
use PhpCsFixer\Fixer\Import\SingleLineAfterImportsFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveIssetsFixer;
use PhpCsFixer\Fixer\LanguageConstruct\CombineConsecutiveUnsetsFixer;
use PhpCsFixer\Fixer\LanguageConstruct\DeclareEqualNormalizeFixer;
use PhpCsFixer\Fixer\LanguageConstruct\DeclareParenthesesFixer;
use PhpCsFixer\Fixer\LanguageConstruct\DirConstantFixer;
use PhpCsFixer\Fixer\LanguageConstruct\ExplicitIndirectVariableFixer;
use PhpCsFixer\Fixer\LanguageConstruct\GetClassToClassKeywordFixer;
use PhpCsFixer\Fixer\LanguageConstruct\IsNullFixer;
use PhpCsFixer\Fixer\LanguageConstruct\SingleSpaceAfterConstructFixer;
use PhpCsFixer\Fixer\ListNotation\ListSyntaxFixer;
use PhpCsFixer\Fixer\NamespaceNotation\BlankLineAfterNamespaceFixer;
use PhpCsFixer\Fixer\NamespaceNotation\CleanNamespaceFixer;
use PhpCsFixer\Fixer\NamespaceNotation\NoLeadingNamespaceWhitespaceFixer;
use PhpCsFixer\Fixer\NamespaceNotation\SingleBlankLineBeforeNamespaceFixer;
use PhpCsFixer\Fixer\Naming\NoHomoglyphNamesFixer;
use PhpCsFixer\Fixer\Operator\AssignNullCoalescingToCoalesceEqualFixer;
use PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\Operator\ConcatSpaceFixer;
use PhpCsFixer\Fixer\Operator\IncrementStyleFixer;
use PhpCsFixer\Fixer\Operator\LogicalOperatorsFixer;
use PhpCsFixer\Fixer\Operator\NoSpaceAroundDoubleColonFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Operator\NoUselessConcatOperatorFixer;
use PhpCsFixer\Fixer\Operator\NoUselessNullsafeOperatorFixer;
use PhpCsFixer\Fixer\Operator\ObjectOperatorWithoutWhitespaceFixer;
use PhpCsFixer\Fixer\Operator\OperatorLinebreakFixer;
use PhpCsFixer\Fixer\Operator\StandardizeIncrementFixer;
use PhpCsFixer\Fixer\Operator\StandardizeNotEqualsFixer;
use PhpCsFixer\Fixer\Operator\TernaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\Operator\TernaryToElvisOperatorFixer;
use PhpCsFixer\Fixer\Operator\TernaryToNullCoalescingFixer;
use PhpCsFixer\Fixer\Operator\UnaryOperatorSpacesFixer;
use PhpCsFixer\Fixer\Phpdoc\AlignMultilineCommentFixer;
use PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocAnnotationRemoveFixer;
use PhpCsFixer\Fixer\Phpdoc\GeneralPhpdocTagRenameFixer;
use PhpCsFixer\Fixer\Phpdoc\NoBlankLinesAfterPhpdocFixer;
use PhpCsFixer\Fixer\Phpdoc\NoEmptyPhpdocFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAddMissingParamAnnotationFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocAlignFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocIndentFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocInlineTagNormalizerFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocLineSpanFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocNoAccessFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocNoAliasTagFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocNoPackageFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocNoUselessInheritdocFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocOrderFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocReturnSelfReferenceFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocScalarFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSeparationFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSingleLineVarSpacingFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocSummaryFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTagTypeFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocToCommentFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTrimConsecutiveBlankLineSeparationFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTrimFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocTypesOrderFixer;
use PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer;
use PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer;
use PhpCsFixer\Fixer\PhpTag\EchoTagSyntaxFixer;
use PhpCsFixer\Fixer\PhpTag\FullOpeningTagFixer;
use PhpCsFixer\Fixer\PhpTag\LinebreakAfterOpeningTagFixer;
use PhpCsFixer\Fixer\PhpTag\NoClosingTagFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitConstructFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitFqcnAnnotationFixer;
use PhpCsFixer\Fixer\PhpUnit\PhpUnitMethodCasingFixer;
use PhpCsFixer\Fixer\ReturnNotation\NoUselessReturnFixer;
use PhpCsFixer\Fixer\ReturnNotation\ReturnAssignmentFixer;
use PhpCsFixer\Fixer\Semicolon\MultilineWhitespaceBeforeSemicolonsFixer;
use PhpCsFixer\Fixer\Semicolon\NoEmptyStatementFixer;
use PhpCsFixer\Fixer\Semicolon\NoSinglelineWhitespaceBeforeSemicolonsFixer;
use PhpCsFixer\Fixer\Semicolon\SemicolonAfterInstructionFixer;
use PhpCsFixer\Fixer\Semicolon\SpaceAfterSemicolonFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use PhpCsFixer\Fixer\StringNotation\ExplicitStringVariableFixer;
use PhpCsFixer\Fixer\StringNotation\HeredocToNowdocFixer;
use PhpCsFixer\Fixer\StringNotation\NoBinaryStringFixer;
use PhpCsFixer\Fixer\StringNotation\SimpleToComplexStringVariableFixer;
use PhpCsFixer\Fixer\StringNotation\SingleQuoteFixer;
use PhpCsFixer\Fixer\StringNotation\StringLengthToEmptyFixer;
use PhpCsFixer\Fixer\Whitespace\ArrayIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\BlankLineBeforeStatementFixer;
use PhpCsFixer\Fixer\Whitespace\BlankLineBetweenImportGroupsFixer;
use PhpCsFixer\Fixer\Whitespace\CompactNullableTypehintFixer;
use PhpCsFixer\Fixer\Whitespace\HeredocIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use PhpCsFixer\Fixer\Whitespace\LineEndingFixer;
use PhpCsFixer\Fixer\Whitespace\MethodChainingIndentationFixer;
use PhpCsFixer\Fixer\Whitespace\NoExtraBlankLinesFixer;
use PhpCsFixer\Fixer\Whitespace\NoSpacesAroundOffsetFixer;
use PhpCsFixer\Fixer\Whitespace\NoSpacesInsideParenthesisFixer;
use PhpCsFixer\Fixer\Whitespace\NoTrailingWhitespaceFixer;
use PhpCsFixer\Fixer\Whitespace\NoWhitespaceInBlankLineFixer;
use PhpCsFixer\Fixer\Whitespace\SingleBlankLineAtEofFixer;
use PhpCsFixer\Fixer\Whitespace\TypesSpacesFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return function (ECSConfig $ecsConfig): void {
    $header = <<<'EOF'
        #logic 做事不讲究逻辑，再努力也只是重复犯错
        ## 何为相思：不删不聊不打扰，可否具体点：曾爱过。何为遗憾：你来我往皆过客，可否具体点：再无你。
        ## 摔倒一次可以怪路不平鞋不正，在同一个地方摔倒两次，只能怪自己和自己和解，无不是一个不错的选择。
        @version 1.0.0
        @author @小小只^v^ <littlezov@qq.com>  littlezov@qq.com
        @link     https://github.com/littlezo
        @document https://github.com/littlezo/wiki
        @license  https://github.com/littlezo/MozillaPublicLicense/blob/main/LICENSE

        EOF;
    $ecsConfig->sets([
        SetList::SPACES,
        SetList::ARRAY,
        // SetList::DOCBLOCK,
        SetList::NAMESPACES,
        // SetList::COMMENTS,
        SetList::SYMPLIFY,
        SetList::PSR_12,
    ]);
    /** @var ContainerConfigurator $ecsConfig */
    $services = $ecsConfig->services();
    $services->set(EncodingFixer::class);
    $services->set(FullOpeningTagFixer::class);
    $services->set(NoPhp4ConstructorFixer::class);
    $services->set(ProtectedToPrivateFixer::class);
    $services->set(OrderedClassElementsFixer::class)->call('configure', [[
        'order' => [
            'use_trait',
            'public',
            'protected',
            'private',
            'property',
            'property_static',
            'property_public',
            'property_public_static',
            'property_public_readonly',
            'property_protected',
            'property_protected_readonly',
            'property_protected_static',
            'property_private',
            'property_private_readonly',
            'property_private_static',
            'constant',
            'constant_public',
            'constant_protected',
            'constant_private',
            'construct',
            'destruct',
            'magic',
            'method',
            'method_abstract',
            'method_static',
            'method_public',
            'method_public_abstract',
            'method_public_static',
            'method_public_abstract_static',
            'method_protected',
            'method_protected_abstract',
            'method_protected_static',
            'method_protected_abstract_static',
            'method_private',
            'method_private_abstract',
            'method_private_static',
            'method_private_abstract_static',
        ],
    ]]);
    $services->set(VisibilityRequiredFixer::class);
    $services->set(SingleClassElementPerStatementFixer::class);
    $services->set(ClassAttributesSeparationFixer::class);
    $services->set(IndentationTypeFixer::class);
    $services->set(NoAlternativeSyntaxFixer::class);
    $services->set(NoBinaryStringFixer::class);
    $services->set(NoEmptyStatementFixer::class);
    $services->set(NoUnneededCurlyBracesFixer::class)->call('configure', [[
        'namespaces' => true,
    ]]);
    $services->set(ElseifFixer::class);
    $services->set(DirConstantFixer::class);
    $services->set(EmptyLoopBodyFixer::class)->call('configure', [[
        'style' => 'braces',
    ]]);
    $services->set(NoUselessElseFixer::class);
    $services->set(ModernizeStrposFixer::class);
    $services->set(ImplodeCallFixer::class);
    $services->set(ClassDefinitionFixer::class)->call('configure', [[
        'single_line' => true,
        'single_item_single_line' => true,
        'space_before_parenthesis' => true,
    ]]);
    $services->set(SingleLineThrowFixer::class);
    $services->set(SingleSpaceAfterConstructFixer::class)->call('configure', [[
        'constructs' => [
            'abstract',
            'as',
            'attribute',
            'break',
            'case',
            'catch',
            'class',
            'clone',
            'comment',
            'const',
            'const_import',
            'continue',
            'do',
            'echo',
            'else',
            'elseif',
            'enum',
            'extends',
            'final',
            'finally',
            'for',
            'foreach',
            'function',
            'function_import',
            'global',
            'goto',
            'if',
            'implements',
            'include',
            'include_once',
            'instanceof',
            'insteadof',
            'interface',
            'match',
            'named_argument',
            'namespace',
            'new',
            'open_tag_with_echo',
            'php_doc',
            'php_open',
            'print',
            'private',
            'protected',
            'public',
            'readonly',
            'require',
            'require_once',
            'return',
            'static',
            'switch',
            'throw',
            'trait',
            'try',
            'type_colon',
            'use',
            'use_lambda',
            'use_trait',
            'var',
            'while',
            'yield',
            'yield_from',
        ],
    ]]);
    $services->set(SingleTraitInsertPerStatementFixer::class);
    $services->set(BracesFixer::class)->call('configure', [[
        'allow_single_line_closure' => true,
        'allow_single_line_anonymous_class_with_empty_body' => true,
    ]]);
    $services->set(CombineNestedDirnameFixer::class);
    $services->set(PowToExponentiationFixer::class);
    $services->set(LambdaNotUsedImportFixer::class);
    $services->set(NoMultilineWhitespaceAroundDoubleArrowFixer::class);
    $services->set(FunctionDeclarationFixer::class);
    $services->set(ModernizeTypesCastingFixer::class);
    $services->set(MethodArgumentSpaceFixer::class)->call('configure', [[
        'on_multiline' => 'ensure_fully_multiline',
    ]]);
    $services->set(NoUnneededControlParenthesesFixer::class)->call('configure', [[
        'statements' => [
            'break',
            'clone',
            'continue',
            'echo_print',
            'others',
            'return',
            'switch_case',
            'yield',
            'yield_from',
        ],
    ]]);
    $services->set(ArrayIndentationFixer::class);
    $services->set(AlignMultilineCommentFixer::class)->call('configure', [[
        'comment_type' => 'phpdocs_only',
    ]]);
    $services->set(CommentToPhpdocFixer::class);
    $services->set(PhpdocToCommentFixer::class);
    $services->set(CombineConsecutiveUnsetsFixer::class);
    $services->set(PhpdocIndentFixer::class);
    $services->set(BacktickToShellExecFixer::class);
    $services->set(PhpdocTypesFixer::class);
    $services->set(StandardizeIncrementFixer::class);
    $services->set(IncrementStyleFixer::class);
    $services->set(PhpdocScalarFixer::class);
    $services->set(PhpdocToReturnTypeFixer::class)->call('configure', [[
        'scalar_types' => true,
    ]]);
    $services->set(GeneralPhpdocTagRenameFixer::class)->call('configure', [[
        'replacements' => [
            'inheritDocs' => 'inheritDoc',
        ],
    ]]);
    $services->set(PhpdocNoAliasTagFixer::class);
    $services->set(PhpdocNoAccessFixer::class);
    $services->set(PhpdocNoPackageFixer::class);
    $services->set(PhpdocReturnSelfReferenceFixer::class);
    $services->set(SingleQuoteFixer::class);
    $services->set(GeneralPhpdocAnnotationRemoveFixer::class)->call('configure', [[
        'annotations' => [],
    ]]);
    $services->set(PhpdocAddMissingParamAnnotationFixer::class);
    $services->set(FullyQualifiedStrictTypesFixer::class);
    $services->set(PhpdocLineSpanFixer::class)->call('configure', [[
        'const' => 'multi',
        'property' => 'multi',
        'method' => 'multi',
    ]]);
    $services->set(PhpdocNoUselessInheritdocFixer::class);
    $services->set(NoUselessConcatOperatorFixer::class);
    $services->set(VoidReturnFixer::class);
    $services->set(NoEmptyPhpdocFixer::class);
    $services->set(CombineConsecutiveIssetsFixer::class);
    $services->set(NoEmptyCommentFixer::class);
    $services->set(SemicolonAfterInstructionFixer::class);
    $services->set(NoSpacesAfterFunctionNameFixer::class);
    $services->set(NoSpacesInsideParenthesisFixer::class);
    $services->set(DeclareStrictTypesFixer::class);
    $services->set(RegularCallableCallFixer::class);
    $services->set(ListSyntaxFixer::class)->call('configure', [[
        'syntax' => 'short',
    ]]);
    $services->set(ArraySyntaxFixer::class)->call('configure', [[
        'syntax' => 'short',
    ]]);
    $services->set(EmptyLoopConditionFixer::class);
    $services->set(NoUnneededImportAliasFixer::class);
    $services->set(SingleImportPerStatementFixer::class)->call('configure', [[
        'group_to_single_imports' => false,
    ]]);
    $services->set(SingleLineCommentSpacingFixer::class);
    $services->set(BlankLineAfterOpeningTagFixer::class);
    $services->set(SimplifiedIfReturnFixer::class);
    $services->set(DoctrineAnnotationArrayAssignmentFixer::class)->call('configure', [[
        'operator' => ':',
    ]]);
    $services->set(GetClassToClassKeywordFixer::class);
    $services->set(IsNullFixer::class);
    $services->set(TernaryToElvisOperatorFixer::class);
    $services->set(StringLengthToEmptyFixer::class);
    $services->set(CleanNamespaceFixer::class);
    $services->set(NoUnsetCastFixer::class);
    $services->set(NormalizeIndexBraceFixer::class);
    $services->set(ShortScalarCastFixer::class);
    $services->set(NoWhitespaceBeforeCommaInArrayFixer::class);
    $services->set(TrailingCommaInMultilineFixer::class);
    $services->set(TernaryToNullCoalescingFixer::class);
    $services->set(ClassReferenceNameCasingFixer::class);
    $services->set(ConcatSpaceFixer::class)->call('configure', [[
        'spacing' => 'one',
    ]]);
    $services->set(EchoTagSyntaxFixer::class);
    $services->set(FunctionTypehintSpaceFixer::class);
    $services->set(GlobalNamespaceImportFixer::class)->call('configure', [[
        'import_classes' => true,
        'import_constants' => true,
        'import_functions' => true,
    ]]);
    $services->set(IncludeFixer::class);
    $services->set(IntegerLiteralCaseFixer::class);
    $services->set(LinebreakAfterOpeningTagFixer::class);
    $services->set(MagicConstantCasingFixer::class);
    $services->set(MagicMethodCasingFixer::class);
    $services->set(NativeFunctionCasingFixer::class);
    $services->set(NativeFunctionTypeDeclarationCasingFixer::class);
    $services->set(NoAliasLanguageConstructCallFixer::class);
    $services->set(NoLeadingNamespaceWhitespaceFixer::class);
    $services->set(NoSinglelineWhitespaceBeforeSemicolonsFixer::class);
    $services->set(NoSpacesAroundOffsetFixer::class);
    $services->set(NoTrailingCommaInSinglelineFixer::class);
    $services->set(NoUselessNullsafeOperatorFixer::class);
    $services->set(ObjectOperatorWithoutWhitespaceFixer::class);
    $services->set(PhpUnitMethodCasingFixer::class);
    $services->set(PhpdocInlineTagNormalizerFixer::class);
    $services->set(PhpdocSummaryFixer::class);
    $services->set(PhpdocTagTypeFixer::class)->call('configure', [[
        'tags' => [
            'inheritDoc' => 'inline',
        ],
    ]]);
    $services->set(PhpdocTypesOrderFixer::class)->call('configure', [[
        'null_adjustment' => 'always_last',
        'sort_algorithm' => 'none',
    ]]);
    $services->set(PhpdocVarWithoutNameFixer::class);
    $services->set(StandardizeNotEqualsFixer::class);
    $services->set(SwitchContinueToBreakFixer::class);
    $services->set(TrimArraySpacesFixer::class);
    $services->set(TypesSpacesFixer::class);
    $services->set(UnaryOperatorSpacesFixer::class);
    $services->set(WhitespaceAfterCommaInArrayFixer::class);
    $services->set(YodaStyleFixer::class)->call('configure', [[
        'always_move_variable' => false,
        'equal' => false,
        'identical' => false,
    ]]);
    $services->set(CompactNullableTypehintFixer::class);
    $services->set(DeclareEqualNormalizeFixer::class);
    $services->set(LowercaseCastFixer::class);
    $services->set(LowercaseStaticReferenceFixer::class);
    $services->set(NoBlankLinesAfterClassOpeningFixer::class);
    $services->set(TernaryOperatorSpacesFixer::class);
    $services->set(ConstantCaseFixer::class);
    $services->set(LineEndingFixer::class);
    $services->set(LowercaseKeywordsFixer::class);
    $services->set(NoBreakCommentFixer::class);
    $services->set(NoClosingTagFixer::class);
    $services->set(NoSpaceAroundDoubleColonFixer::class);
    $services->set(NoTrailingWhitespaceFixer::class);
    $services->set(NoTrailingWhitespaceInCommentFixer::class);
    $services->set(SwitchCaseSemicolonToColonFixer::class);
    $services->set(SwitchCaseSpaceFixer::class);
    $services->set(MultilineWhitespaceBeforeSemicolonsFixer::class)->call('configure', [[
        'strategy' => 'no_multi_line',
    ]]);
    $services->set(NonPrintableCharacterFixer::class)->call('configure', [[
        'use_escape_sequences_in_strings' => true,
    ]]);
    $services->set(ArrayPushFixer::class);
    $services->set(EregToPregFixer::class);
    $services->set(RandomApiMigrationFixer::class);
    $services->set(SetTypeToCastFixer::class);
    $services->set(SelfAccessorFixer::class);
    $services->set(NoNullPropertyInitializationFixer::class);
    $services->set(OrderedInterfacesFixer::class);
    $services->set(OrderedTraitsFixer::class);
    $services->set(DateTimeImmutableFixer::class);
    $services->set(ControlStructureContinuationPositionFixer::class)->call('configure', [[
        'position' => 'same_line',
    ]]);
    $services->set(FopenFlagOrderFixer::class);
    $services->set(UseArrowFunctionsFixer::class);
    $services->set(DeclareParenthesesFixer::class);
    $services->set(ExplicitIndirectVariableFixer::class);
    $services->set(NoHomoglyphNamesFixer::class);
    $services->set(LogicalOperatorsFixer::class);
    $services->set(OperatorLinebreakFixer::class);
    $services->set(ExplicitStringVariableFixer::class);
    $services->set(HeredocToNowdocFixer::class);
    $services->set(MethodChainingIndentationFixer::class);
    $services->set(AssignNullCoalescingToCoalesceEqualFixer::class);
    $services->set(SpaceAfterSemicolonFixer::class)->call('configure', [[
        'remove_in_empty_for_expressions' => true,
    ]]);
    $services->set(PhpdocOrderFixer::class);
    $services->set(PhpdocSeparationFixer::class);
    $services->set(PhpdocTrimFixer::class);
    $services->set(PhpUnitConstructFixer::class);
    $services->set(NoShortBoolCastFixer::class);
    $services->set(PhpUnitFqcnAnnotationFixer::class);
    $services->set(SimpleToComplexStringVariableFixer::class);
    $services->set(CastSpacesFixer::class);
    $services->set(NoMixedEchoPrintFixer::class);
    $services->set(NoUnusedImportsFixer::class);
    $services->set(PhpdocSingleLineVarSpacingFixer::class);
    $services->set(PsrAutoloadingFixer::class);
    $services->set(NotOperatorWithSuccessorSpaceFixer::class);
    $services->set(SelfStaticAccessorFixer::class);
    $services->set(SingleLineAfterImportsFixer::class);
    $services->set(ReturnAssignmentFixer::class);
    $services->set(ReturnTypeDeclarationFixer::class);
    $services->set(NoUselessReturnFixer::class);
    $services->set(NoWhitespaceInBlankLineFixer::class);
    $services->set(NoBlankLinesAfterPhpdocFixer::class);
    $services->set(NoExtraBlankLinesFixer::class);
    $services->set(NoLeadingImportSlashFixer::class);
    $services->set(BlankLineAfterNamespaceFixer::class);
    $services->set(BlankLineBeforeStatementFixer::class)->call('configure', [[
        'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try'],
    ]]);
    $services->set(SingleBlankLineBeforeNamespaceFixer::class);
    $services->set(HeredocIndentationFixer::class)->call('configure', [[
        'indentation' => 'start_plus_one',
    ]]);
    $services->set(OrderedImportsFixer::class)->call('configure', [[
        'imports_order' => ['class', 'function', 'const'],
    ]]);
    $services->set(HeaderCommentFixer::class)->call('configure', [[
        'header' => $header,
        'comment_type' => 'PHPDoc',
        'location' => 'after_declare_strict',
    ]]);
    $services->set(SingleLineCommentStyleFixer::class)->call('configure', [[
        'comment_types' => ['hash', 'asterisk'],
    ]]);
    $services->set(BinaryOperatorSpacesFixer::class)->call('configure', [[
        'operators' => [
            '=' => 'single_space',
            'xor' => null,
            '+=' => 'align_single_space',
            '===' => 'align_single_space_minimal',
            '=>' => 'single_space',
        ],
    ]]);
    $services->set(BlankLineBetweenImportGroupsFixer::class);
    $services->set(PhpdocTrimConsecutiveBlankLineSeparationFixer::class);
    $services->set(PhpdocAlignFixer::class)->call('configure', [[
        'tags' => [
            'method',
            'param',
            'property',
            'property-read',
            'property-write',
            'return',
            'throws',
            'type',
            'var',
        ],
        'align' => 'left',
    ]]);
    $services->set(SingleBlankLineAtEofFixer::class);
    $ecsConfig->rules([NoUnusedImportsFixer::class]);
    $ecsConfig->fileExtensions(['php', 'json']);
    $ecsConfig->parallel();
    $ecsConfig->paths([__DIR__ . '/package', __DIR__ . '/src', __DIR__ . '/test']);
};
