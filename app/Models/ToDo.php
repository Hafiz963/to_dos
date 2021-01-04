<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        "user_id",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeAccess($query)
    {
        if (auth()->user()->hasRole('Super Admin'))
            return $query;

        return $query->where('user_id', auth()->user()->id);
    }
}
