<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    protected $fillable = ['country', 'company', 'address', 'phone', 'email', 'website', 'status', 'publish_by'];
}
