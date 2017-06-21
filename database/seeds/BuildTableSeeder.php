<?php

use Illuminate\Database\Seeder;
use App\Build;

class BuildTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Build::create([
        	'idproject'=>1,
        	'type'=>'Android',
        	'note'=>'Fixing and recostumize treeview',
        	'link_file_APK'=>'https://github.com/Azgared@Zorg.git',
        	]);
        Build::create([
        	'idproject'=>1,
        	'type'=>'Android',
        	'note'=>'Finishing',
        	'link_file_APK'=>'https://github.com/Azgared@Zorg.git',
        	]);
    }
}
