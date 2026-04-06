<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artifact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'object_type',
        'period',
        'origin',
        'material',
        'description',
        'additional_info',
        'image_path',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('name', 'asc');
    }
}
    