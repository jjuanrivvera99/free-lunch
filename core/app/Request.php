<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Request extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'request';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'request_id';

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
        'plate_id',
        'kitchener_id',
        'date',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'plate_id',
        'kitchener_id',
        'request_state_id',
        'date',
    ];

    /**
     * Get user that owns the request
     */
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    /**
     * Get user that owns the request
     */
    public function kitchener(){
        return $this->belongsTo('App\Kitchener', 'kitchener_id', 'kitchener_id');
    }

    /**
     * Get user that owns the request
     */
    public function status(){
        return $this->belongsTo('App\RequestState', 'request_state_id', 'request_state_id');
    }

    /**
     * Get user that owns the request
     */
    public function plate(){
        return $this->belongsTo('App\Plate', 'plate_id', 'plate_id');
    }
}
