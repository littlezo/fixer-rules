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

use Rector\Config\RectorConfig;
use Rector\Php70\Rector\Assign\ListSplitStringRector;
use Rector\Php70\Rector\Assign\ListSwapArrayOrderRector;
use Rector\Php70\Rector\Break_\BreakNotInLoopOrSwitchToReturnRector;
use Rector\Php70\Rector\ClassMethod\Php4ConstructorRector;
use Rector\Php70\Rector\FuncCall\CallUserMethodRector;
use Rector\Php70\Rector\FuncCall\EregToPregMatchRector;
use Rector\Php70\Rector\FuncCall\MultiDirnameRector;
use Rector\Php70\Rector\FuncCall\NonVariableToVariableOnFunctionCallRector;
use Rector\Php70\Rector\FuncCall\RandomFunctionRector;
use Rector\Php70\Rector\FuncCall\RenameMktimeWithoutArgsToTimeRector;
use Rector\Php70\Rector\FunctionLike\ExceptionHandlerTypehintRector;
use Rector\Php70\Rector\If_\IfToSpaceshipRector;
use Rector\Php70\Rector\List_\EmptyListRector;
use Rector\Php70\Rector\MethodCall\ThisCallOnStaticMethodToStaticCallRector;
use Rector\Php70\Rector\StaticCall\StaticCallOnNonStaticToInstanceCallRector;
use Rector\Php70\Rector\Switch_\ReduceMultipleDefaultSwitchRector;
use Rector\Php70\Rector\Ternary\TernaryToNullCoalescingRector;
use Rector\Php70\Rector\Ternary\TernaryToSpaceshipRector;
use Rector\Php70\Rector\Variable\WrapVariableVariableNameInCurlyBracesRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(Php4ConstructorRector::class);
    $rectorConfig->rule(TernaryToNullCoalescingRector::class);
    $rectorConfig->rule(RandomFunctionRector::class);
    $rectorConfig->rule(ExceptionHandlerTypehintRector::class);
    $rectorConfig->rule(MultiDirnameRector::class);
    $rectorConfig->rule(ListSplitStringRector::class);
    $rectorConfig->rule(EmptyListRector::class);
    // be careful, run this just once, since it can keep swapping order back and forth
    $rectorConfig->rule(ListSwapArrayOrderRector::class);
    $rectorConfig->rule(CallUserMethodRector::class);
    $rectorConfig->rule(EregToPregMatchRector::class);
    $rectorConfig->rule(ReduceMultipleDefaultSwitchRector::class);
    $rectorConfig->rule(TernaryToSpaceshipRector::class);
    $rectorConfig->rule(WrapVariableVariableNameInCurlyBracesRector::class);
    $rectorConfig->rule(IfToSpaceshipRector::class);
    $rectorConfig->rule(StaticCallOnNonStaticToInstanceCallRector::class);
    $rectorConfig->rule(ThisCallOnStaticMethodToStaticCallRector::class);
    $rectorConfig->rule(BreakNotInLoopOrSwitchToReturnRector::class);
    $rectorConfig->rule(RenameMktimeWithoutArgsToTimeRector::class);
    $rectorConfig->rule(NonVariableToVariableOnFunctionCallRector::class);
};
