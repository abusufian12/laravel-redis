<?php

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
        // $this->call(UserSeeder::class);
        // \App\Models\Post::factory(10)->create();
        //factory(App\Models\Post::class,10)->create();
        factory(App\Models\Book::class,10)->create();
    }
}
