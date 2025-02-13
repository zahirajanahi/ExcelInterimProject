<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'is_active'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_active' => 'boolean',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function isAdmin(): bool
{
    return $this->role?->name === 'admin' || $this->role?->name === 'super_admin';
}

public function isSuperAdmin(): bool
{
    return $this->role?->name === 'super_admin';
}

    public function isUser(): bool
    {
        return $this->role?->name === 'user';
    }
}
