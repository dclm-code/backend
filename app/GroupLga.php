<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupLga extends Model
{
    protected $fillable = ['state_id', 'local_govt_name', 'local_govt_code'];
}
