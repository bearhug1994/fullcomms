<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';

    public $fillable = [
        'id',
        'name',
        'email',
    ];

    public static function getAll(){
        return self::all('email')->take('1');
    }
}
