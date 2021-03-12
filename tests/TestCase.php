<?php

declare(strict_types=1);

namespace DrewRoberts\Media\Tests;

use DrewRoberts\Media\MediaServiceProvider;
use DrewRoberts\Media\Tests\Support\Providers\NovaPackageServiceProvider;
use Laravel\Nova\NovaCoreServiceProvider;
use Silvanite\NovaFieldCloudinary\Providers\PackageServiceProvider;
use Spatie\Permission\PermissionServiceProvider;
use Tipoff\Authorization\AuthorizationServiceProvider;
use Tipoff\Support\SupportServiceProvider;
use Tipoff\TestSupport\BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            SupportServiceProvider::class,
            AuthorizationServiceProvider::class,
            PermissionServiceProvider::class,
            MediaServiceProvider::class,
            NovaCoreServiceProvider::class,
            NovaPackageServiceProvider::class,
            PackageServiceProvider::class,
        ];
    }
}
