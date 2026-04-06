<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class RemembrancePage extends Model
{
    use HasFactory;

    protected $table = 'remembrance_pages';

    protected $fillable = [
        'image_path',
        'page_label',
    ];

    public function soldiers(): HasMany
    {
        return $this->hasMany(Remembrance::class, 'page_id');
    }

}
