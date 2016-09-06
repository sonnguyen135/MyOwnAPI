<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'Vehicles';
    protected $fillable = ['serie','color','power','capacity','speed','maker_id'];
    protected $primaryKey = 'serie';
}
