<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['fullName', 'userName', 'slug', 'email', 'role'];

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

    const user = 1;
    const staff = 2;
    const company = 3;

    const userName = 'User';
    const staffName = 'Staff';
    const companyName = 'Company';

    protected $appends = ['user_type'];

    public function getUserTypeAttribute()
    {
        switch ($this->role) {
            case self::user:
                return self::userName;
                break;
            case self::staff:
                return self::staffName;
                break;
            case self::company:
                return self::companyName;
                break;
            default:
                return;
                break;
        }
    }
}
