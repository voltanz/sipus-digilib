<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

use Spatie\Permission\Models\Role;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasRoles, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nisn', 'email_verified_at'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function borrow()
    {
        return  $this->belongsToMany(Book::class, 'borrow_history')->withTimestamps();
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function transaksiDetail()
    {
        return $this->hasManyThrough(Detail_transaksi::class, Transaksi::class);
    }
}
