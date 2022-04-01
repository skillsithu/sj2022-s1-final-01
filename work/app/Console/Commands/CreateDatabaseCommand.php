<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adatbázis létrehozása';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Adatbázis létrehozása");

        $this->info(env('DB_CHARSET'));

        try{
      

            $pdo = DB::connection('mysql2')->getPdo();
            $pdo->exec("CREATE DATABASE IF NOT EXISTS `utazas` character set utf8 collate utf8_hungarian_ci;");
               
            // $sql = "CREATE DATABASE IF NOT EXISTS :dbname";
            // $sth = $pdo->prepare($sql);
            // $sth->execute([
            //     ":dbname"=>$dbname,
            //     // ":charset"=>env('DB_CHARSET'),
            //     // ":collate"=>env('DB_COLLATION')
            // ]);
               
            //$this->info("Adatbázis létezik: '$dbname'");
            
        }
        catch (\Exception $e){
            $this->error($e->getMessage());
        }
    }
}
