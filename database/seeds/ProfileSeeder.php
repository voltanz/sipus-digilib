<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = [
            ['nama_profile' => 'Sejarah Perpustakaan',],
            ['nama_profile' => 'STAFF',],
            ['nama_profile' => 'Visi & Misi',],
        ];

        DB::table('profile')->insert($profile);
    }
}