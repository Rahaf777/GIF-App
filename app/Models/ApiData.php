<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiData extends Model
{
    protected $table = "api_data";
    protected $fillable = [
        'url','title',
    ];
}
