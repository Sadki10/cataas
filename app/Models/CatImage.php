<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatImage extends Model
{
    protected $fillable = [
        '_id',
        'tags',
        'mimetype',
    ];

    protected function casts()
    {
        return [
            'tags' => 'array',
        ];
    }
}
