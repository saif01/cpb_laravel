<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $fillable = ['user_id', 'recruit_id'];

    // public function recruit(){
    //     return $this->belongsTo('App\Recruit');
    // }
}
