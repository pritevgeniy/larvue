<?php

namespace App\Jobs;

use App\Models\Data;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class DataAddJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    /**
     * @throws RuntimeException
     */
    public function handle(): void
    {
        $exception = DB::transaction(function() {
            Data::factory()->count(1000)->create();
        });

        if(is_null($exception) === false) {
            throw new RuntimeException('Job Error adding');
        }

    }
}
