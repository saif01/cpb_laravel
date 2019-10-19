<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PresidentMsg extends Model
{
    protected $fillable = ['name', 'details', 'image', 'status', 'publish_by'];
}
