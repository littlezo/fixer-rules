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
use Rector\Php74\Rector\ArrayDimFetch\CurlyToSquareBracketArrayStringRector;
use Rector\Php74\Rector\Assign\NullCoalescingOperatorRector;
use Rector\Php74\Rector\Closure\ClosureToArrowFunctionRector;
use Rector\Php74\Rector\Double\RealToFloatTypeCastRector;
use Rector\Php74\Rector\FuncCall\ArrayKeyExistsOnPropertyRector;
use Rector\Php74\Rector\FuncCall\ArraySpreadInsteadOfArrayMergeRector;
use Rector\Php74\Rector\FuncCall\FilterVarToAddSlashesRector;
use Rector\Php74\Rector\FuncCall\MbStrrposEncodingArgumentPositionRector;
use Rector\Php74\Rector\FuncCall\MoneyFormatToNumberFormatRector;
use Rector\Php74\Rector\LNumber\AddLiteralSeparatorToNumberRector;
use Rector\Php74\Rector\MethodCall\ChangeReflectionTypeToStringToGetNameRector;
use Rector\Php74\Rector\Property\RestoreDefaultNullToNullableTypePropertyRector;
use Rector\Php74\Rector\StaticCall\ExportToReflectionFunctionRector;
use Rector\Php74\Rector\Ternary\ParenthesizeNestedTernaryRector;
use Rector\Renaming\Rector\FuncCall\RenameFunctionRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromAssignsRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(RenameFunctionRector::class, [
        // the_real_type
        // https://wiki.php.net/rfc/deprecations_php_7_4
        'is_real' => 'is_float',
        // apache_request_headers_function
        // https://wiki.php.net/rfc/deprecations_php_7_4
        'apache_request_headers' => 'getallheaders',
    ]);
    $rectorConfig->rules(
        [
            ArrayKeyExistsOnPropertyRector::class,
            FilterVarToAddSlashesRector::class,
            ExportToReflectionFunctionRector::class,
            MbStrrposEncodingArgumentPositionRector::class,
            RealToFloatTypeCastRector::class,
            NullCoalescingOperatorRector::class,
            ClosureToArrowFunctionRector::class,
            ArraySpreadInsteadOfArrayMergeRector::class,
            AddLiteralSeparatorToNumberRector::class,
            ChangeReflectionTypeToStringToGetNameRector::class,
            RestoreDefaultNullToNullableTypePropertyRector::class,
            CurlyToSquareBracketArrayStringRector::class,
            MoneyFormatToNumberFormatRector::class,
            ParenthesizeNestedTernaryRector::class,
            TypedPropertyFromAssignsRector::class,
        ]
    );
};
