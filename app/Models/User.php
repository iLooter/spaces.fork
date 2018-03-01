<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use Cache;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login',
        'email',
        'password',
        'email_token',
        'is_confirmed',
        'first_name',
        'last_name',
        'rating',
        'gender',
        'birthday',
        'marital_status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];



    public function howOld()
    {

        return empty($this->birthday) ? '' : Carbon::createFromFormat('Y-m-d', $this->birthday)->diff(Carbon::now())->y;

    }

    //check if user online. See LogLasUserActivity middleware
    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }






}
