<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Group;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(15)->create();
        $groups = Group::factory(5)->create();

        foreach ($users as $user) {
            $userGroups = $groups->random(rand(1, 3))->pluck('id')->toArray();
            foreach ($userGroups as $groupId) {
                DB::table('users_groups')->insert([
                    'groups_id' => $groupId,
                    'user_id' => $user->id,
                    'created_at' => now(),
                ]);
            }
        }
    }
}
