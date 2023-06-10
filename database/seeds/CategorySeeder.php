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
                'category_name' => 'karya umum'
            ],
            [
                'category_name' => 'filsafat'
            ],
            [
                'category_name' => 'ilmu sosial'
            ],
            [
                'category_name' => 'bahasa'
            ],
            [
                'category_name' => 'ilmu murni'
            ],[
                'category_name' => 'pengetahuan praktis'
            ],
            [
                'category_name' => 'kesenian dan hiburan'
            ],
            [
                'category_name' => 'kesusastraan'
            ],
        ];

        foreach ($kategori as $item) {
            Category::create($item);
        }
    }
}
