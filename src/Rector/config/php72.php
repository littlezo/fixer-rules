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
use Rector\Php72\Rector\Assign\ListEachRector;
use Rector\Php72\Rector\Assign\ReplaceEachAssignmentWithKeyCurrentRector;
use Rector\Php72\Rector\FuncCall\CreateFunctionToAnonymousFunctionRector;
use Rector\Php72\Rector\FuncCall\GetClassOnNullRector;
use Rector\Php72\Rector\FuncCall\IsObjectOnIncompleteClassRector;
use Rector\Php72\Rector\FuncCall\ParseStrWithResultArgumentRector;
use Rector\Php72\Rector\FuncCall\StringifyDefineRector;
use Rector\Php72\Rector\FuncCall\StringsAssertNakedRector;
use Rector\Php72\Rector\Unset_\UnsetCastRector;
use Rector\Php72\Rector\While_\WhileEachToForeachRector;
use Rector\Renaming\Rector\FuncCall\RenameFunctionRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(WhileEachToForeachRector::class);
    $rectorConfig->rule(ListEachRector::class);
    $rectorConfig->rule(ReplaceEachAssignmentWithKeyCurrentRector::class);
    $rectorConfig->rule(UnsetCastRector::class);
    $rectorConfig->ruleWithConfiguration(RenameFunctionRector::class, [
        // and imagewbmp
        'jpeg2wbmp' => 'imagecreatefromjpeg',
        // or imagewbmp
        'png2wbmp' => 'imagecreatefrompng',
        // migration72.deprecated.gmp_random-function
        // http://php.net/manual/en/migration72.deprecated.php
        // or gmp_random_range
        'gmp_random' => 'gmp_random_bits',
        'read_exif_data' => 'exif_read_data',
    ]);
    $rectorConfig->rule(GetClassOnNullRector::class);
    $rectorConfig->rule(IsObjectOnIncompleteClassRector::class);
    $rectorConfig->rule(ParseStrWithResultArgumentRector::class);
    $rectorConfig->rule(StringsAssertNakedRector::class);
    $rectorConfig->rule(CreateFunctionToAnonymousFunctionRector::class);
    $rectorConfig->rule(StringifyDefineRector::class);
};
