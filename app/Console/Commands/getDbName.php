<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class getDbName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:get_db_name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To get database name';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dbName = DB::connection()->getDatabaseName();
        $this->info("The current database name is $dbName");
    }
}
