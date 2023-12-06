<?php

namespace App\Models\Auth;


use App\Models\Auth\Traits\Method\RoleMethod;



class Role extends \Spatie\Permission\Models\Role
{
    use  RoleMethod;
}

