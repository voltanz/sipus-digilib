<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use function PHPSTORM_META\map;

class Book extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function getCover()
    {
        if (substr($this->cover, 0, 5) == 'https') {
            return $this->cover;
        }
        if ($this->cover) {
            return asset($this->cover);
        }
    }

    public function borrowed()
    {
        return $this->belongsToMany(User::class, 'borrow_history')->withTimestamps();
    }

    public function detail_transaksi()
    {
        return $this->hasMany(Detail_transaksi::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
