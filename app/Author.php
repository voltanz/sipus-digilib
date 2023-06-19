<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{

    use HasFactory, SoftDeletes;

    protected $guarded = [];
    public $timestamps = false;
    protected $dates = ['deleted_at'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
