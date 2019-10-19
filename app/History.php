<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['date', 'title', 'details', 'image', 'status', 'publish_by'];
}
