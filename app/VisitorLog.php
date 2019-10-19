<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    protected $fillable = ['ip', 'os', 'device', 'browser', 'city', 'country', 'count'];
}
