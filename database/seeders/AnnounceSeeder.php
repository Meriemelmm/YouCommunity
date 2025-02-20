<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\announce;

class AnnounceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Announce::create([
        'name' => 'Annonce 1',
        'password' => bcrypt('password123'),
        'bio' => 'Description de l\'annonce',
        'description' => 'Détails supplémentaires sur l\'annonce',
        'role' => 'admin',
        'prix' => 150,
    ]);
}

}
