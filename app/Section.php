<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * "section_code": "LP",
     * "section_name": "LIFE PRESS"
     */
    protected $fillable = ["section_code", "section_name"];
}
