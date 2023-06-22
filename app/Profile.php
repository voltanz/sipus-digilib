<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table="users"; // Eloquent akan membuat model mahasiswa menyimpan record di tabel siswa
    public $timestamps= false; 
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    /**
     * * The attributes that are mass assignable.
     * *
     * * @var array
     * */
    
     protected $fillable = [
        'name',
        'email',
        'phone',
    ];
};
