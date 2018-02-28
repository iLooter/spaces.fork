<?php

/*
 * // Check if the request password and current auth:user()->password the same
 *
 */
namespace App\Validation;

use Auth;
use Hash;

final class PasscheckRule
{
    const NAME = 'passcheck';

    /*
     * @return boolean
     */
    public function validate($attribute, $value, $parameters)
    {
        return Hash::check($value, Auth::user()->password);
    }
}