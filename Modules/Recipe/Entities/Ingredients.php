<?php

namespace Modules\Recipe\Entities;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'ingredients';

    /**
     * The database primary key value.
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be assignable.
     * @var array
     */
    protected $fillable = [
        'total', 'flour', 'water', 'salt', 'oil', 'yeast'
    ];
}
