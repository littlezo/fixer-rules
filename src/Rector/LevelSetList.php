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

namespace Littler\FixerRules\Rector;

use Rector\Set\Contract\SetListInterface;

/**
 * @api
 */
final class LevelSetList implements SetListInterface
{
    /**
     * @var string
     */
    public const UP_TO_PHP_82 = __DIR__ . '/config/level/up-to-php82.php';

    /**
     * @var string
     */
    public const UP_TO_PHP_81 = __DIR__ . '/config/level/up-to-php81.php';

    /**
     * @var string
     */
    public const UP_TO_PHP_80 = __DIR__ . '/config/level/up-to-php80.php';

    /**
     * @var string
     */
    public const UP_TO_PHP_74 = __DIR__ . '/config/level/up-to-php74.php';

    /**
     * @var string
     */
    public const UP_TO_PHP_73 = __DIR__ . '/config/level/up-to-php73.php';

    /**
     * @var string
     */
    public const UP_TO_PHP_72 = __DIR__ . '/config/level/up-to-php72.php';

    /**
     * @var string
     */
    public const UP_TO_PHP_71 = __DIR__ . '/config/level/up-to-php71.php';

    /**
     * @var string
     */
    public const UP_TO_PHP_70 = __DIR__ . '/config/level/up-to-php70.php';

    /**
     * @var string
     */
    public const UP_TO_PHP_56 = __DIR__ . '/config/level/up-to-php56.php';

    /**
     * @var string
     */
    public const UP_TO_PHP_55 = __DIR__ . '/config/level/up-to-php55.php';

    /**
     * @var string
     */
    public const UP_TO_PHP_54 = __DIR__ . '/config/level/up-to-php54.php';

    /**
     * @var string
     */
    public const UP_TO_PHP_53 = __DIR__ . '/config/level/up-to-php53.php';
}
