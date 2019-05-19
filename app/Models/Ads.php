<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $table = 'ads';
    protected $primaryKay = 'id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'image_url',
    ];
}
