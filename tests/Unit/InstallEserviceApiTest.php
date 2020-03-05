<?php
namespace Ezyky\Eserviceapi\Tests\Unit\InstallEserviceApiTest;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Ezyky\Eserviceapi\Tests\TestCase;

class InstallEserviceApiTest extends TestCase
{
    /** @test */
    function the_install_command_copies_a_the_configuration()
    {
        // make sure we're starting from a clean state
        if (File::exists(config_path('eserviceapi.php'))) {
            unlink(config_path('eserviceapi.php'));
        }

        $this->assertFalse(File::exists(config_path('eserviceapi.php')));

        Artisan::call('eserviceapi:install');

        $this->assertTrue(File::exists(config_path('eserviceapi.php')));
    }
}
