<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    protected $primarykey = "idcustomer";

    protected $foreignkey = "city";
    protected $foreignkey2 = "user";

    protected $fillable = [
        "idcustomer","namacustomer","adress","city","user"
    ];


}
