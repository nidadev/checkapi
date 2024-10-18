<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class QueueWork extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:queue-work';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this will run queue jobs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        Artisan::call('queue:work', [
            '--timeout' => 60,
            '--tries' => 3,
        ]);
        $this->info('queue call successfully');

    }
}