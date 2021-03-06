<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    protected $table = 'todo';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'activity', 'description',
    ];
}
