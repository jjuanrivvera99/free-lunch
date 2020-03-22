<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Auditable
{
    use Notifiable, ShinobiTrait, \OwenIt\Auditing\Auditable;

    /**
     * Attributes to include in the Audit.
     *
     * @var array
     */
    protected $auditInclude = [
        'name',
        'description',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get all user's request
     */
    public function requests(){
        return $this->hasMany('App\Request', 'user_id');
    }

    /**
     * Get kitchener
     */
    public function kitchener(){
        return $this->hasOne('App\Kitchener', 'user_id');
    }
}
