<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\{UserSeeder,EmpresaSeeder};
use App\Models\{Category,Meal};


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
<<<<<<< HEAD
        Meal::factory(8)->create();
=======
        Meal::factory(20)->create();
>>>>>>> 486eaed33031ba57023870fa59e2d2e54ee94a0d
    }
}
