<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

trait HasRoles
{
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }

    public function assignRole(Role $role): Model
    {
        return $this->roles()->save($role);
    }

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    public function isPartner()
    {
        return $this->hasRole('partner');
    }

    public function hasRole(string $role)
    {
        return $this->roles()->where('name', $role)->exists();
    }
}
