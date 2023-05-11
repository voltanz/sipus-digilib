<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Detail_transaksi;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $guarded = [''];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detail_transaksi()
    {
        return $this->hasMany(Detail_transaksi::class);
    }

    public function borrow()
    {
        return $this->hasMany(Book::class);
    }
}
