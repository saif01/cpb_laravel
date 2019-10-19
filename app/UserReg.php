<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReg extends Model
{
    protected $fillable = ['name', 'contact', 'address', 'email', 'password', 'document', 'image', 'verify', 'token', 'status', 'publish_by'];
}
