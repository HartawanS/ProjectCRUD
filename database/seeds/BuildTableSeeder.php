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
        Build::create( [
'id'=>2,
'idproject'=>1,
'type'=>'Android',
'note'=>'Finishing1asd',
'link_file_APK'=>'https://github.com/Azgared@Zorg.git',
'created_at'=>'2017-06-21 03:22:18',
'updated_at'=>'2017-06-21 06:45:33'
] );


            
Build::create( [
'id'=>5,
'idproject'=>5,
'type'=>'Android',
'note'=>'Part 1',
'link_file_APK'=>'https://coba.com',
'created_at'=>'2017-06-22 03:25:38',
'updated_at'=>'2017-06-22 03:25:38'
] );


            
Build::create( [
'id'=>6,
'idproject'=>3,
'type'=>'iOS',
'note'=>'root',
'link_file_APK'=>'https://github.com/AzgaredSena@STMJOnline.git',
'created_at'=>'2017-06-22 06:00:07',
'updated_at'=>'2017-07-03 07:00:04'
] );


            
Build::create( [
'id'=>7,
'idproject'=>6,
'type'=>'Android',
'note'=>'Jombloker aplikasi  pencari  jodoh',
'link_file_APK'=>'https://gitlab.com/Hartawan@jombloker',
'created_at'=>'2017-07-03 04:13:02',
'updated_at'=>'2017-07-03 05:56:51'
] );
    }
}
