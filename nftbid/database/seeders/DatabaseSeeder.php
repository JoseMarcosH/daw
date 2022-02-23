<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //php artisan make:seeder Nombre // crear seeder
        //php artisan db:seed //ejecuta e insterta los datos en la db
       
        $this->call(UsersSeeder::class);
        $this->call(CategoriesSeeder::class);
    }
}
