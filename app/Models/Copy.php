<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Copy
 *
 * @property $id
 * @property $book_id
 * @property $number
 * @property $shelving_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Book $book
 * @property Shelving $shelving
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Copy extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['book_id', 'number', 'shelving_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book()
    {
        return $this->belongsTo(\App\Models\Book::class, 'book_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shelving()
    {
        return $this->belongsTo(\App\Models\Shelving::class, 'shelving_id', 'id');
    }
    
}
