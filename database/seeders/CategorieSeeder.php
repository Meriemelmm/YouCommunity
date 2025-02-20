<?php

namespace Database\Seeders;

use App\Models\announce;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        announce::factory(10)->create();
        announce::create([
            'name' => 'Chair',
            'description' => 'hello'
            
        ]);
    }
}
