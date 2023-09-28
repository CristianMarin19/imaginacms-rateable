<?php

namespace Modules\Rateable\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RateableDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        $this->call(RateableModuleTableSeeder::class);
        // $this->call("OthersTableSeeder");
    }
}
