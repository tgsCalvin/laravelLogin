<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ErDiagram extends Model
{

    protected $table = 'erdiagram';
    public $timestamps = false;

    protected $fillable = [
        'id', 'jsonString',
    ];
}
