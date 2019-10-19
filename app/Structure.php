<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    protected $fillable = ['analysis', 'design', 'development', 'testing', 'go_Live', 'status', 'publish_by'];
}
