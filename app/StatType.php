<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id', 'icon', 'color', 'description'
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
