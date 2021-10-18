<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\{UserSeeder,EmpresaSeeder};
use App\Models\{Category,Meal,Events};


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
        $this->call(UserSeeder::class);
        $this->call(EmpresaSeeder::class);
        Category::factory(4)->create();
        Meal::factory(8)->create();
        Events::factory(2)->create();
    }
}
