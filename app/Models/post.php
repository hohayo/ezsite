<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'category_id', 'content', 'pic', 'sort', 'enabled'
    ];

    protected $cats = [
        'created_at' => 'datetime:Y-m-d m:i:s',
        'updated_at' => 'datetime:Y-m-d m:i:s',
    ];
}
