<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Press extends Model
{
    protected $fillable = ['date', 'title', 'details', 'document', 'image', 'status', 'publish_by'];

}
