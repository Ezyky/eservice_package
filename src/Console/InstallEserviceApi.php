<?php
namespace Ezyky\Eserviceapi\Console;

use Illuminate\Console\Command;

class InstallEserviceApi extends Command
{
    protected $signature = 'eserviceapi:install';

    protected $description = 'Installation du package eserviceapi';

    public function handle()
    {
        $this->info('Demarrage de l\'installation eserviceapi...');

        $this->info('Diffusion de la configuration...');

        $this->call('vendor:publish', [
            '--provider' => "Ezyky\Eserviceapi\EserviceApiServiceProvider",
            '--tag' => "config"
        ]);

        $this->info('Package eserviceapi installé');
    }
}
