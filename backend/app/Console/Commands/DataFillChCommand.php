<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class DataFillChCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill-data-ch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $description = fake()->text();
        $text = fake()->text();
        app(\ClickHouseDB\Client::class)->write(
        "INSERT INTO data (*) VALUES (1, now(), '{$text}', '{$description}');"
        );

        $result = app(\ClickHouseDB\Client::class)->select(
            "SELECT * FROM data;"
        );

            //SELECT * FROM insert_select_testtable
        var_dump($result->rows());

        return CommandAlias::SUCCESS;
    }
}
