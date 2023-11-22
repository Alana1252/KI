<?php

namespace App\Models;

use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel as MythModel;

/**
 * @method User|null first()
 */
class UserModel extends MythModel
{
    protected $returnType = 'App\Entities\User';
}
