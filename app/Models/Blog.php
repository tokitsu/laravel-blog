<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $casts = [
        'is_open' => 'boolean',
        // 'body' => 'collection'
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name'  => 'ιδΌθ'
        ]);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->oldest();
    }

    public function scopeOnlyOpen($query)
    {
        return $query->where('is_open', true);
    }
}
