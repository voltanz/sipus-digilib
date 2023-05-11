<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaksi;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Detail_transaksi extends Model
{
    protected $table = 'detail_transaksi';
    protected $guarded = [''];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
