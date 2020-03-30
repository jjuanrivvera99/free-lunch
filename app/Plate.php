<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Plate extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'plates';

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
     * Attributes to include in the Audit.
     *
     * @var array
     */
    protected $auditInclude = [
        'plate_state_id',
        'name',
        'description',
    ];

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

    // /**
    //  * The ingredients that belong to the plate.
    //  */
    // public function ingredients(){

    //     return $this->belongsToMany('App\Ingredient', 'plate_ingredient', 'plate_id', 'plate_id')->withPivot('qty');
    // }
}
