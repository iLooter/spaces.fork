<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activation extends Model
{
    //

    protected function generateToken()
    {
        return hash_hmac('sha256', Str::random(40), config('app.key'));
    }

    protected function saveToken(AuthenticatableContract $user, $token)
    {
        if (! $this->isCompliant($user)) {
            throw new ModelNotCompliantException();
        }
        $user->verified = false;
        $user->verification_token = $token;
        return $user->save();
    }
}
