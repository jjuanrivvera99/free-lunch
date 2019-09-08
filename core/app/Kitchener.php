<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kitchener extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kitchener';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'kitchener_id';

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
        'user_id',
    ];
}
