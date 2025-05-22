<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Vacancy;
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
        $users = \App\Models\User::factory(10)->create();
        
        foreach ($users as $user) {
            \App\Models\Vacancy::factory()->create([
                'user_id' => $user->id
            ]);
        }

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Stephen Alonzo',
        //     'email' => 'stephen@email.com',
        //     'password' => 'password'
        // ]);

        // \App\Models\Vacancy::factory()->create([
        //     'title' => 'Web Developer',
        //     'description' => 'Description',
        //     'company' => 'ALNZ Media',
        //     'location' => 'Saipan, MP'
        // ]);
    }
}
