<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'image',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
