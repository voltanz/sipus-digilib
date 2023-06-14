<?php

namespace Database\Seeders;

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                'category_name' => 'Karya Umum'
            ],
            [
                'category_name' => 'Filsafat'
            ],
            [
                'category_name' => 'Ilmu Sosial'
            ],
            [
                'category_name' => 'Bahasa'
            ],
            [
                'category_name' => 'Ilmu Murni'
            ],[
                'category_name' => 'Pengetahuan Praktis'
            ],
            [
                'category_name' => 'Kesenian dan Hiburan'
            ],
            [
                'category_name' => 'Kesusastraan'
            ],
        ];

        foreach ($kategori as $item) {
            Category::create($item);
        }
    }
}
