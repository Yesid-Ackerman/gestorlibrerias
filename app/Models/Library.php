<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Library
 *
 * @property $id
 * @property $name
 * @property $localization
 * @property $desc
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Library extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'localization', 'desc'];


}
