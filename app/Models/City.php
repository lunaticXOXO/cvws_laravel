<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "city";
    protected $primarykey = "codes";
    protected $fillable = [
        "codes","nama","country"];
}
