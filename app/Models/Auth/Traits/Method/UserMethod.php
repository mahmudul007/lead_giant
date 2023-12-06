<?php

namespace App\Models\Auth\Traits\Method;



trait UserMethod
{

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }
}
