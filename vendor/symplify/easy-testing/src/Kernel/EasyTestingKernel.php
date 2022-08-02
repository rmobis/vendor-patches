<?php

declare (strict_types=1);
namespace VendorPatches202208\Symplify\EasyTesting\Kernel;

use VendorPatches202208\Psr\Container\ContainerInterface;
use VendorPatches202208\Symplify\EasyTesting\ValueObject\EasyTestingConfig;
use VendorPatches202208\Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
final class EasyTestingKernel extends AbstractSymplifyKernel
{
    /**
     * @param string[] $configFiles
     */
    public function createFromConfigs(array $configFiles) : ContainerInterface
    {
        $configFiles[] = EasyTestingConfig::FILE_PATH;
        return $this->create($configFiles);
    }
}
