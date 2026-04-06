<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Remembrance extends Model
{
    use SoftDeletes;

    protected $table = 'remembrance';

    protected $fillable = [
        'full_name',
        'rank_title',
        'branch',
        'squadron',
        'page_id',
    ];

    public function page()
    {
        return $this->belongsTo(RemembrancePage::class, 'page_id');
    }

    public function scopeSearchByName($query, $name)
    {
        return $query->whereFullText('full_name', $name);
    }
}
