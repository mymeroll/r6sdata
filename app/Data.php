<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
	protected $fillable = [
        'name','legends','kill','assist','score',
    ];
    protected $fillable = [
        'name','map','k/d','death','assist','score',
    ];
}
