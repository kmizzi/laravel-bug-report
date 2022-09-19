<?php

namespace App\Console\Commands;

use App\Jobs\GenerateJobBatchJob;
use Illuminate\Console\Command;

class GenerateJobBatchCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:job-batch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run Job Batch Job';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dispatch(new GenerateJobBatchJob());
    }
}
