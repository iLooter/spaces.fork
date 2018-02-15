<?php

namespace App\Repositories;

use Auth;
use App\User;


class UserRepository
{
    use BaseRepository;

    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getByName($name)
    {
        return $this->model
            ->where('name', $name)
            ->first();
    }

    public function getById($id)
    {
        //
    }

}