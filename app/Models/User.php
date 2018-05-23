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
        'total_online',
        'profession'
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

    public function getTotalOnline() : string
    {
        $minutes = floor($this->total_online / 60);
        $hours = floor($minutes/60);
        $minutes -= $hours*60;

        return "$hours hour and $minutes mins";
    }

    public function getRegDate() : string
    {
        return Carbon::parse($this->created_at)->format("Y-m-d");
    }

    public function getGender() : string
    {
        return ucfirst($this->gender);
    }

    public function getMaritalStatus() : string
    {
        switch($this->marital_status) {
            case 'none':
                return 'Not Indicated';
            case 'unmarried':
                return 'Single';
            case 'married':
                return 'Married';
            case 'no_longer_married':
                return 'Divorced';
            case 'active_search':
                return 'In active search';
            case 'inlove':
                return 'In Love';
            case 'betrothed':
                return 'Betrothed';
            case 'complicated':
                return 'Complicated';
            default:
                return '';
        }
    }

    public function getLastVisit() : string
    {
        $date = new Carbon($this->last_visit);

        return $date->isToday() ? 'today at '.$date->format('H:i') : $date->format('Y-m-d H:i');
    }

    public function getHiddenEmail() : string
    {
        $atIndex = strpos($this->email, '@');
        $atIndex /= 2;

        return str_repeat("*", $atIndex) . substr($this->email, $atIndex);
    }


    /*Relationship*/

    /*public function conversation()
    {
        return $this->belongsTo('App\Model\Conversation');
    }*/





}
