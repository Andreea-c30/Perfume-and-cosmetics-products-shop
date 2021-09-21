<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        $fs=new Filesystem();
        $fs->cleanDirectory('storage/app/public');

       \App\Models\Blog\Article::factory(10)->create();
       \App\Models\Products\Products::factory(5)->create();
    }
}
