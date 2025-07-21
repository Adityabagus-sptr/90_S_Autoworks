<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'name' => 'super_admin',
                'display_name' => 'Super Admin',
                'description' => 'Full access to all features',
                'permissions' => [
                    'view_users', 'create_users', 'edit_users', 'delete_users',
                    'view_roles', 'create_roles', 'edit_roles', 'delete_roles',
                    'view_articles', 'create_articles', 'edit_articles', 'delete_articles',
                    'view_heroes', 'create_heroes', 'edit_heroes', 'delete_heroes',
                    'view_contacts', 'edit_contacts', 'delete_contacts',
                    'view_dashboard'
                ]
            ],
            [
                'name' => 'editor',
                'display_name' => 'Editor',
                'description' => 'Content management access (no user management)',
                'permissions' => [
                    'view_articles', 'create_articles', 'edit_articles', 'delete_articles',
                    'view_heroes', 'create_heroes', 'edit_heroes', 'delete_heroes',
                    'view_contacts', 'edit_contacts',
                    'view_dashboard'
                ]
            ],
            [
                'name' => 'user',
                'display_name' => 'User',
                'description' => 'View only access (no user management)',
                'permissions' => [
                    'view_articles',
                    'view_heroes',
                    'view_contacts',
                    'view_dashboard'
                ]
            ]
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['name' => $role['name']],
                $role
            );
        }
    }
}
