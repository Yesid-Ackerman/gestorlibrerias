<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Author
 *
 * @property $id
 * @property $name
 * @property $bio
 * @property $created_at
 * @property $updated_at
 *
 * @property Book[] $books
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Author extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'bio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books()
    {
        return $this->hasMany(\App\Models\Book::class, 'id', 'author_id');
    }
    
}
