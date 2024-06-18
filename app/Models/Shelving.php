<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Shelving
 *
 * @property $id
 * @property $codshel
 * @property $topic_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Topic $topic
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Shelving extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['codshel', 'topic_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function topic()
    {
        return $this->belongsTo(\App\Models\Topic::class, 'topic_id', 'id');
    }
    
}
