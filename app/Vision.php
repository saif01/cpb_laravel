<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    protected $fillable = ['header', 'title', 'details', 'image', 'status', 'publish_by'];
}
