<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Enums\V1\PermissionEnum;
use App\Enums\V1\RoleEnum;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        foreach (PermissionEnum::getAll() as $permission) {
            Permission::create(['name' => $permission]);
        }
        
        // create roles and assign created permissions

        Role::create(['name' => RoleEnum::ADMIN->value])
            ->givePermissionTo(PermissionEnum::groupByRole()[RoleEnum::ADMIN->value]);

        Role::create(['name' => RoleEnum::MENTOR->value])
            ->givePermissionTo(PermissionEnum::groupByRole()[RoleEnum::MENTOR->value]);
    }
}
