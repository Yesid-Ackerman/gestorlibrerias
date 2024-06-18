<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Topic
 *
 * @property $id
 * @property $name
 * @property $code
 * @property $created_at
 * @property $updated_at
 *
 * @property Shelving[] $shelvings
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Topic extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'code'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shelvings()
    {
        return $this->hasMany(\App\Models\Shelving::class, 'id', 'topic_id');
    }
    
}
