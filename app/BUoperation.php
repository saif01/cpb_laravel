<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BUoperation extends Model
{
    protected $fillable = ['title', 'details', 'status', 'publish_by'];
}
