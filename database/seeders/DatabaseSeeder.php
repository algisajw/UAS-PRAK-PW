<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        User::create(['username' => 'ibu', 'password' => '123', 'role' => 'Ibu']);
        User::create(['username' => 'ayah', 'password' => '123', 'role' => 'Ayah']);
        User::create(['username' => 'anak', 'password' => '123', 'role' => 'Anak']);

        Category::create(['name' => 'Bumbu Kering']);
        Category::create(['name' => 'Bumbu Basah']);
        Category::create(['name' => 'Rempah']);
    }
}
