<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';

    public $fillable = [
        'id',
        'name',
        'email',
        'subject',
        'message',
    ];

    public static function getAll() {
        return self::all();
    }

    public static function getRecent() {
        return self::all()->sortByDesc('created_at')->take('1');
    }
}
