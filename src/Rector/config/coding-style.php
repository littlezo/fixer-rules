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

use Rector\CodingStyle\Rector\ArrowFunction\StaticArrowFunctionRector;
use Rector\CodingStyle\Rector\Assign\SplitDoubleAssignRector;
use Rector\CodingStyle\Rector\Catch_\CatchExceptionNameMatchingTypeRector;
use Rector\CodingStyle\Rector\Class_\AddArrayDefaultToArrayPropertyRector;
use Rector\CodingStyle\Rector\ClassConst\RemoveFinalFromConstRector;
use Rector\CodingStyle\Rector\ClassConst\SplitGroupedClassConstantsRector;
use Rector\CodingStyle\Rector\ClassConst\VarConstantCommentRector;
use Rector\CodingStyle\Rector\ClassMethod\FuncGetArgsToVariadicParamRector;
use Rector\CodingStyle\Rector\ClassMethod\MakeInheritedMethodVisibilitySameAsParentRector;
use Rector\CodingStyle\Rector\ClassMethod\NewlineBeforeNewAssignSetRector;
use Rector\CodingStyle\Rector\ClassMethod\RemoveDoubleUnderscoreInMethodNameRector;
use Rector\CodingStyle\Rector\ClassMethod\UnSpreadOperatorRector;
use Rector\CodingStyle\Rector\Closure\StaticClosureRector;
use Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector;
use Rector\CodingStyle\Rector\Encapsed\WrapEncapsedVariableInCurlyBracesRector;
use Rector\CodingStyle\Rector\FuncCall\CallUserFuncArrayToVariadicRector;
use Rector\CodingStyle\Rector\FuncCall\CallUserFuncToMethodCallRector;
use Rector\CodingStyle\Rector\FuncCall\ConsistentImplodeRector;
use Rector\CodingStyle\Rector\FuncCall\ConsistentPregDelimiterRector;
use Rector\CodingStyle\Rector\FuncCall\CountArrayToEmptyArrayComparisonRector;
use Rector\CodingStyle\Rector\FuncCall\StrictArraySearchRector;
use Rector\CodingStyle\Rector\FuncCall\VersionCompareFuncCallToConstantRector;
use Rector\CodingStyle\Rector\If_\NullableCompareToNullRector;
use Rector\CodingStyle\Rector\Plus\UseIncrementAssignRector;
use Rector\CodingStyle\Rector\PostInc\PostIncDecToPreIncDecRector;
use Rector\CodingStyle\Rector\Property\AddFalseDefaultToBoolPropertyRector;
use Rector\CodingStyle\Rector\Property\SplitGroupedPropertiesRector;
use Rector\CodingStyle\Rector\Stmt\NewlineAfterStatementRector;
use Rector\CodingStyle\Rector\String_\SymplifyQuoteEscapeRector;
use Rector\CodingStyle\Rector\String_\UseClassKeywordForClassNameResolutionRector;
use Rector\CodingStyle\Rector\Switch_\BinarySwitchToIfElseRector;
use Rector\CodingStyle\Rector\Ternary\TernaryConditionVariableAssignmentRector;
use Rector\CodingStyle\Rector\Use_\SeparateMultiUseImportsRector;
use Rector\Config\RectorConfig;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;
use Rector\Transform\Rector\FuncCall\FuncCallToConstFetchRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(FuncCallToConstFetchRector::class, ['php_sapi_name' => 'PHP_SAPI', 'pi' => 'M_PI']);
    $rectorConfig->rules([SeparateMultiUseImportsRector::class, RemoveDoubleUnderscoreInMethodNameRector::class, PostIncDecToPreIncDecRector::class, UnSpreadOperatorRector::class, NewlineAfterStatementRector::class, RemoveFinalFromConstRector::class, NullableCompareToNullRector::class, BinarySwitchToIfElseRector::class, ConsistentImplodeRector::class, TernaryConditionVariableAssignmentRector::class, SymplifyQuoteEscapeRector::class, StringClassNameToClassConstantRector::class, ConsistentPregDelimiterRector::class, CatchExceptionNameMatchingTypeRector::class, UseIncrementAssignRector::class, SplitDoubleAssignRector::class, VarConstantCommentRector::class, EncapsedStringsToSprintfRector::class, WrapEncapsedVariableInCurlyBracesRector::class, NewlineBeforeNewAssignSetRector::class, AddArrayDefaultToArrayPropertyRector::class, AddFalseDefaultToBoolPropertyRector::class, MakeInheritedMethodVisibilitySameAsParentRector::class, CallUserFuncArrayToVariadicRector::class, VersionCompareFuncCallToConstantRector::class, StaticArrowFunctionRector::class, StaticClosureRector::class, CountArrayToEmptyArrayComparisonRector::class, CallUserFuncToMethodCallRector::class, FuncGetArgsToVariadicParamRector::class, StrictArraySearchRector::class, UseClassKeywordForClassNameResolutionRector::class, SplitGroupedPropertiesRector::class, SplitGroupedClassConstantsRector::class]);
};
