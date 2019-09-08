<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'plate';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'plate_id';

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
        'plate_state_id',
        'name',
        'description',
    ];
}
