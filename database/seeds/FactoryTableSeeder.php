<?php

use Illuminate\Database\Seeder;
use App\MasterUser;
class FactoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MasterUser::class,20)->create();
    }
}
