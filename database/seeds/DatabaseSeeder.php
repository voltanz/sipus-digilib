<?php

use App\Author;
use App\Book;
use App\User;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(CategorySeeder::class);
        Author::factory(10)->create();
        Book::factory(50)->create();
        User::factory(20)->create();
    }
}
