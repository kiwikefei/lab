<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
abstract class BaseSeeder extends Seeder
{
    protected function message($message)
    {
        echo "==== $message ====\n";
    }
    protected function emptyTables($tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECK=0');
        collect($tables)->each(function($table){
            DB::table($table)->truncate();
        });
        DB::statement('SET FOREIGN_KEY_CHECK=1');
    }
}