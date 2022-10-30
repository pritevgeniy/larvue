<?php

namespace App\Console\Commands;

use App\Jobs\DataAddJob;
use Illuminate\Console\Command;
use Exception;
use Symfony\Component\Console\Command\Command as CommandAlias;

class DataFill extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill-data {count?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return bool|int
     * @throws Exception
     */
    public function handle(): bool|int
    {
        $count = $this->argument('count') ?? 1000;
        for ($i = 0; $i <= intdiv($count, 1000); $i++) {
            dispatch(new DataAddJob());
        }

        return CommandAlias::SUCCESS;
    }
}
