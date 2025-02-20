<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class DeleteCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command will delete cache';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('optimize:clear');
        Artisan::call('serve');
        $this->info('cache deleted successfully');
    }
}
