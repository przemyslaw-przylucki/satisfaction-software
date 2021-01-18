<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::query()->delete();
        User::truncate();
        Team::truncate();

        $role = Role::create([
            'name' => 'team_lead'
        ]);

        $team = Team::factory()->create();

        $user = User::factory()->create([
            'email' => 'test@example.com',
            'team_id' => $team->id
        ]);

        $user->assignRole($role);
    }
}
