<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class Users extends Model
{
    protected $table  = "userList";
    protected $fillable = ['idproject','iduser'];

     //custom timestamps name
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
