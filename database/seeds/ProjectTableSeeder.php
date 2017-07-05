<?php

use Illuminate\Database\Seeder;
use App\Project;
class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Project::create( [
'id'=>1,
'name'=>'Susu Sapi Nasional',
'created_at'=>'2017-06-21 03:19:02',
'updated_at'=>'2017-06-21 03:19:02'
] );


            
Project::create( [
'id'=>3,
'name'=>'Susu Telor Madu Jahe',
'created_at'=>'2017-06-21 04:45:06',
'updated_at'=>'2017-06-21 04:45:06'
] );


            
Project::create( [
'id'=>5,
'name'=>'Coba coba',
'created_at'=>'2017-06-22 03:24:38',
'updated_at'=>'2017-06-22 03:24:38'
] );


            
Project::create( [
'id'=>6,
'name'=>'Wawan WOW',
'created_at'=>'2017-07-03 04:11:18',
'updated_at'=>'2017-07-03 04:11:18'
] );
    }
}
