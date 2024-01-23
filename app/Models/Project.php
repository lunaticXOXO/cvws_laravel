<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "project";

    protected $primarykey = "idproject";
   

    protected $fillable = [
        "idproject","projectname","description","picture","start_date","finish_date"
    ];
}
