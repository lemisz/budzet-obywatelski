<?php

namespace Database\Seeders;

use App\Models\Idea;
use App\Models\Category;
use App\Models\User;
use App\Models\Vote;
use App\Models\Status;
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
        // \App\Models\User::factory(10)->create();

        
        User::factory(20)->create();
        
        Category::factory()->create(['name' => 'Kultura']);
        Category::factory()->create(['name' => 'Sport']);
        Category::factory()->create(['name' => 'Infrastruktura']);
        Category::factory()->create(['name' => 'Zdrowie']);

        Status::factory()->create(['name' => 'Nowy']);
        Status::factory()->create(['name' => 'Rozważane']);
        Status::factory()->create(['name' => 'W realizacji']);
        Status::factory()->create(['name' => 'Zrealizowane']);
        Status::factory()->create(['name' => 'Odrzucone']);
        
        Idea::factory(100)->create();

        //Generowanie unikalnych głosów

        foreach (range(1, 20) as $user_id) {
            foreach (range(1, 100) as $idea_id) {
                if ($idea_id % 2 === 0) {
                    Vote::factory()->create([
                        'user_id' => $user_id,
                        'idea_id' => $idea_id,
                    ]);
                }
            }
        }

    }
}
