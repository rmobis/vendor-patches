<?php

declare (strict_types=1);
namespace VendorPatches20220610\Symplify\EasyTesting\PHPUnit;

/**
 * @api
 */
final class StaticPHPUnitEnvironment
{
    /**
     * Never ever used static methods if not neccesary, this is just handy for tests + src to prevent duplication.
     */
    public static function isPHPUnitRun() : bool
    {
        return \defined('VendorPatches20220610\\PHPUNIT_COMPOSER_INSTALL') || \defined('VendorPatches20220610\\__PHPUNIT_PHAR__');
    }
}