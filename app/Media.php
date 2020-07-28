<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    protected $table = 'media';
    public $timestamps = false;

    use SoftDeletes;
}
