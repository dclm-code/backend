<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    protected $fillable = [ 'name', 'department', 'model', 'plate', 'milage', 'litre', 'admin', 'store', 'audit', 'dispenser', 'litre_dispensed' ];
}
