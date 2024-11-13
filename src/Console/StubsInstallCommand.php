<?php

namespace AhweatSean\AssetFiles\Console;

use Illuminate\Console\Command;

class StubsInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'asset-files:stubs-install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the asset-files stubs files';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->stubs();
    }

    /**
     * Stubs.
     */
    protected function stubs(): void
    {
        //

        $this->info('The stub file publishing process has been successfully completed.');
    }
}
