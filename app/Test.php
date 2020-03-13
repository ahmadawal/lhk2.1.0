<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 't_test';
    protected $fillable = ['nama', 'mesin'];
    public $timestamps = false;
}
