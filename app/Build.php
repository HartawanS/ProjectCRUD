<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class Build extends Model
{
    //
    protected $table  = "buildlist";
    protected $fillable = ['idproject','type','version','note','link_file_APK'];

     //custom timestamps name
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // public function getprojectname($id)
    // {
    //     $projectname = Project::find($id)->get('name');

    //     return $projectname;
    // }
}
