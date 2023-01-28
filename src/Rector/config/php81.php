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
use Rector\Php81\Rector\Array_\FirstClassCallableRector;
use Rector\Php81\Rector\ClassConst\FinalizePublicClassConstantRector;
use Rector\Php81\Rector\ClassMethod\NewInInitializerRector;
use Rector\Php81\Rector\Class_\MyCLabsClassToEnumRector;
use Rector\Php81\Rector\Class_\SpatieEnumClassToEnumRector;
use Rector\Php81\Rector\FuncCall\NullToStrictStringFuncCallArgRector;
use Rector\Php81\Rector\FuncCall\Php81ResourceReturnToObjectRector;
use Rector\Php81\Rector\FunctionLike\IntersectionTypesRector;
use Rector\Php81\Rector\MethodCall\MyCLabsMethodCallToEnumConstRector;
use Rector\Php81\Rector\MethodCall\SpatieEnumMethodCallToEnumConstRector;
use Rector\Php81\Rector\Property\ReadOnlyPropertyRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnNeverTypeRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ReturnNeverTypeRector::class);
    $rectorConfig->rule(MyCLabsClassToEnumRector::class);
    $rectorConfig->rule(MyCLabsMethodCallToEnumConstRector::class);
    // $rectorConfig->rule(FinalizePublicClassConstantRector::class);
    // $rectorConfig->rule(ReadOnlyPropertyRector::class);
    $rectorConfig->rule(SpatieEnumClassToEnumRector::class);
    $rectorConfig->rule(SpatieEnumMethodCallToEnumConstRector::class);
    $rectorConfig->rule(Php81ResourceReturnToObjectRector::class);
    $rectorConfig->rule(NewInInitializerRector::class);
    $rectorConfig->rule(IntersectionTypesRector::class);
    $rectorConfig->rule(NullToStrictStringFuncCallArgRector::class);
    $rectorConfig->rule(FirstClassCallableRector::class);
};
