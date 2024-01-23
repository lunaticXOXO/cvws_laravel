<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedProject extends Model
{
    protected $table = "ordered_project";
    protected $primarykey = "idordered";


    protected $fillable = [
        "idordered","quantity","orderdate","project","customer"
    ];
}
