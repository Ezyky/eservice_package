<?php
namespace Ezyky\Eserviceapi\Tests;

use Ezyky\Eserviceapi\EserviceApiServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            EserviceApiServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {

    }
}
