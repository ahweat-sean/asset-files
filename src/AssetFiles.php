<?php

namespace AhweatSean\AssetFiles;

class AssetFiles
{
    /**
     * Package name.
     */
    private const PACKAGE_NAME = 'asset-files';

    /**
     * Package version.
     */
    private const PACKAGE_VERSION = 'v1.0.0';

    /**
     * Package name.
     */
    public function packageName(): string
    {
        return self::PACKAGE_NAME;
    }

    /**
     * Package version.
     */
    public function packageVersion(): string
    {
        return self::PACKAGE_VERSION;
    }

    /**
     * Config value.
     */
    public function configValue(string $configKeyName = 'package_information.name'): mixed
    {
        return config($this->packageName().'.'.$configKeyName);
    }
}
