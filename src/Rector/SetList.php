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
final class SetList implements SetListInterface
{
    /**
     * @var string
     */
    public const ACTION_INJECTION_TO_CONSTRUCTOR_INJECTION = __DIR__ . '/config/action-injection-to-constructor-injection.php';

    /**
     * @var string
     */
    public const CODE_QUALITY = __DIR__ . '/config/code-quality.php';

    /**
     * @var string
     */
    public const CODING_STYLE = __DIR__ . '/config/coding-style.php';

    /**
     * @var string
     */
    public const DEAD_CODE = __DIR__ . '/config/dead-code.php';

    /**
     * @var string
     */
    public const GMAGICK_TO_IMAGICK = __DIR__ . '/config/gmagick-to-imagick.php';

    /**
     * @var string
     */
    public const MYSQL_TO_MYSQLI = __DIR__ . '/config/mysql-to-mysqli.php';

    /**
     * @var string
     */
    public const NAMING = __DIR__ . '/config/naming.php';

    /**
     * @var string
     */
    public const PHP_52 = __DIR__ . '/config/php52.php';

    /**
     * @var string
     */
    public const PHP_53 = __DIR__ . '/config/php53.php';

    /**
     * @var string
     */
    public const PHP_54 = __DIR__ . '/config/php54.php';

    /**
     * @var string
     */
    public const PHP_55 = __DIR__ . '/config/php55.php';

    /**
     * @var string
     */
    public const PHP_56 = __DIR__ . '/config/php56.php';

    /**
     * @var string
     */
    public const PHP_70 = __DIR__ . '/config/php70.php';

    /**
     * @var string
     */
    public const PHP_71 = __DIR__ . '/config/php71.php';

    /**
     * @var string
     */
    public const PHP_72 = __DIR__ . '/config/php72.php';

    /**
     * @var string
     */
    public const PHP_73 = __DIR__ . '/config/php73.php';

    /**
     * @var string
     */
    public const PHP_74 = __DIR__ . '/config/php74.php';

    /**
     * @var string
     */
    public const PHP_80 = __DIR__ . '/config/php80.php';

    /**
     * @var string
     */
    public const PHP_81 = __DIR__ . '/config/php81.php';

    /**
     * @var string
     */
    public const PHP_82 = __DIR__ . '/config/php82.php';

    /**
     * @var string
     */
    public const PRIVATIZATION = __DIR__ . '/config/privatization.php';

    /**
     * @var string
     */
    public const PSR_4 = __DIR__ . '/config/psr-4.php';

    /**
     * @var string
     */
    public const TYPE_DECLARATION = __DIR__ . '/config/type-declaration.php';

    /**
     * @var string
     */
    public const EARLY_RETURN = __DIR__ . '/config/early-return.php';
}
