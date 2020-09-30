<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSearch extends Model
{
    protected $table = "user_search";
    protected $fillable = [
        'user_id','search_string',
    ];
}
