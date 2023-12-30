<?php

namespace Modules\Blog;

use Modules\Blog\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $filament = [
        'title',
        'description',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(related: Post::class, foreignKey: 'category_id');
    }
}
