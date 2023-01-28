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

namespace Littler\FixerRules;

use Composer\Composer;
use Composer\Config\JsonConfigSource;
use Composer\Factory;
use Composer\IO\ConsoleIO;
use Composer\IO\IOInterface;
use Composer\Json\JsonFile;
use Composer\Plugin\PluginInterface;
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Output\ConsoleOutput;

class Hook implements PluginInterface
{
    private Composer $composer;

    private IOInterface $io;

    public function activate(Composer $composer, IOInterface $io): void
    {
        $this->composer = $composer;
        $this->io = $io;
        self::copy();
        self::publishConfig();
    }

    public function deactivate(Composer $composer, IOInterface $io): void
    {
        $this->composer = $composer;
        $this->io = $io;
        echo 'deactivate';
    }

    public function uninstall(Composer $composer, IOInterface $io): void
    {
        $this->composer = $composer;
        $this->io = $io;
        echo 'uninstall';
    }

    public static function copy(): void
    {
        $io = new ConsoleIO(new ArgvInput, new ConsoleOutput, new HelperSet);
        $from = dirname(__DIR__, 1) . '/.php-cs-fixer.php';
        $to = getcwd() . '/.php-cs-fixer.php';
        if ($from == $to) {
            return;
        }

        if (! copy($from, $to)) {
            $io->write(sprintf('<error>copy %s failed....</error>', $to));
        } else {
            $io->write(sprintf('<info>copy %s successult....</info>', $to));
        }

        $phpstan_from = dirname(__DIR__, 1) . '/phpstan.neon';
        $phpstan_to = getcwd() . '/phpstan.neon';
        if (file_exists($phpstan_to)) {
            return;
        }

        if (! copy($phpstan_from, $phpstan_to)) {
            $io->write(sprintf('<error>copy %s failed....</error>', $phpstan_to));
        } else {
            $io->write(sprintf('<info>copy %s successult....</info>', $phpstan_to));
        }
    }

    public static function publishConfig(): void
    {
        $io = new ConsoleIO(new ArgvInput, new ConsoleOutput, new HelperSet);
        $config = new JsonConfigSource(new JsonFile(Factory::getComposerFile()));
        $config->addProperty('scripts.post-autoload-dump', [
            'rm -rf runtime/container',
            self::class . '::copy',
            self::class . '::publishConfig',
            'php-cs-fixer fix $1',
            'phpstan analyse --memory-limit 300M -l 0 -c phpstan.neon',
        ]);
        $io->write('<info>Publish Config successult...</info>');
    }
}
