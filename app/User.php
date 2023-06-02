<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasRoles;
    // use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password','nisn'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var arrayb
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
