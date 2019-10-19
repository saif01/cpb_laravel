<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'title', 'details', 'website', 'image1', 'image2', 'image3', 'image4', 'image5', 'status', 'publish_by'];
}
