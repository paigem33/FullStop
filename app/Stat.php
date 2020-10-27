<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'stat_type', 'date', 'notes', 'duration', 'severity'
    ];
}

// stats table
    // user id
    // stat_type id
    // date
    // description 
    // duration
    // severity 

// stat_type table
    // icon 
    // name 
    // user id
    // color

