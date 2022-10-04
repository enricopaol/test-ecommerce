<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('categories')->insert([
            'name' => 'Camicie',
            'description' => 'Tutte le nostre camicie'
        ]);

        for($i = 1; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => 'Camicia ' . $i,
                'description' => 'Descrizione camicia ' . $i,
                'price' => rand(10, 150),
                'category_id' => 1
            ]);
        }
    }
}
