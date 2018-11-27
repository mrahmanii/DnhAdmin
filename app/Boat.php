<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Boat extends Model
{

    protected $table = 'boats';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'length',
        'password',
        'picture',
        'isPrimary',
        'ownerId'
    ];

}