<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChairmanMsg extends Model
{
    protected $fillable = ['name', 'details', 'image', 'status', 'publish_by'];
}
