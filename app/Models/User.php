<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function id(): int
    {
        return $this->id;
    }

    public function login(): string
    {
        return $this->login;
    }

    public function emailAddress(): string
    {
        return $this->email;
    }

    /**
     * IPv6 addresses should be converted using MySQL's INET_ATON function.
     * To convert them back to their original value, use INET_NTOA.
     * in DB ip store as VARBINARY(4)
     *
     * @return string
     */
    public function ip(): string
    {
        return INET_NTOA($this->ip_address);
    }






}
