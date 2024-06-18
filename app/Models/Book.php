<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 *
 * @property $id
 * @property $name
 * @property $date
 * @property $author_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Author $author
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Book extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'date', 'author_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(\App\Models\Author::class, 'author_id', 'id');
    }
    
}
