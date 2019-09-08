<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlateIngredient extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'plate_ingredient';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'plate_ingredient_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plate_id',
        'ingredient_id',
        'qty',
    ];
}
