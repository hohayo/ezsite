<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'desc', 'sort', 'enabled'
    ];

    protected $cats = [
        'created_at' => 'datetime:Y-m-d m:i:s',
        'updated_at' => 'datetime:Y-m-d m:i:s',
    ];
}
