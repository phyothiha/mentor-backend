<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\V1\RoleEnum;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        $this->call([
            RolesAndPermissionsSeeder::class,
        ]);
        
        User::factory()->create([
            'name' => RoleEnum::ADMIN->value,
            'email' => 'admin@example.com',
        ])->assignRole(RoleEnum::ADMIN->value);
        
        User::factory()->create([
            'name' => RoleEnum::MENTOR->value,
            'email' => 'mentor@example.com',
        ])->assignRole(RoleEnum::MENTOR->value);
    }
}
