<?php

namespace App\Models;

use Faker\Provider\DateTime;
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
        'marital_status',
        'last_visit',
        'total_online'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];



    public function howOld()
    {

        return empty($this->birthday) ? '' : Carbon::createFromFormat('Y-m-d', $this->birthday)->diff(Carbon::now(config('app.timezone')))->y;

    }

    //check if user online. See LogLasUserActivity middleware
    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }

    // See LogLasUserActivity middleware
    public function updateLastVisit()
    {
        $this->updateTotalOnline();

        $this->last_visit = Carbon::now(config('app.timezone'));
        $this->save();
    }

    //count total user online time in seconds // See LogLasUserActivity middleware
    private function updateTotalOnline()
    {
        //check if user been unactive last 5 minutes
        if($this->isOnline()) {
            //count sub between now and last visit

            //in seconds
            $sessTime = Carbon::now(config('app.timezone'))->diffInSeconds(new Carbon($this->last_visit));

            //adding to total time
            $this->total_online = $this->total_online + $sessTime;
            $this->save();
        }
    }

    public function getTotalOnline()
    {
        return gmdate("H:i:s", $this->total_online);
    }

    public function getRegDate()
    {
        return Carbon::parse($this->created_at)->format("Y-m-d");
    }






}
