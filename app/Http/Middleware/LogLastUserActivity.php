<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Auth;
use Cache;

class LogLastUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //time in minutes which detect if user off/online
    private $expiresTime = 5;

    public function handle($request, Closure $next)
    {
        if(Auth::check()) {

            //first update user online. Check if user has been offline add session time to total online time, than put to cache status that he is online
            Auth::user()->updateLastVisit();

            $expiresAt = Carbon::now(config('app.timezone'))->addMinutes($this->expiresTime);
            //cache activity
            Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);


        }
        return $next($request);
    }
}
