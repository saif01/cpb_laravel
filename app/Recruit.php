<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    protected $fillable = ['job_title', 'deadline', 'location', 'department', 'education', 'description', 'requirement', 'experience', 'salary', 'status', 'publish_by'];
}
