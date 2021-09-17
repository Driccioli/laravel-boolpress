<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[ //Possono essere riempiti partendo da un array associativo
        'title',
        'user',
        'userpic',
        'content',
    ];
}
