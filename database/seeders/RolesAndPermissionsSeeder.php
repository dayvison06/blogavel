<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dayvison',
            'email' => 'dayvison@gmail.com',
            'password' => Hash::make('dayvison'),
        ]);

        // Dados combinados de permissões
        $permissionsData = [
            [
                'name' => 'create_posts',
                'display_name' => 'Create Posts',
                'description' => 'Pode criar posts',
            ],
            [
                'name' => 'edit_posts',
                'display_name' => 'Edit Posts',
                'description' => 'Pode editar posts',
            ],
            [
                'name' => 'delete_posts',
                'display_name' => 'Delete Posts',
                'description' => 'Pode remover posts',
            ],
            [
                'name' => 'view_posts',
                'display_name' => 'View Posts',
                'description' => 'Pode visualizar posts',
            ],
        ];

        // Cria todas as permissões
        foreach ($permissionsData as $permissionData) {
            Permission::firstOrCreate(
                ['name' => $permissionData['name']], // Busca por nome
                [ // Dados a serem inseridos caso não exista
                    'display_name' => $permissionData['display_name'],
                    'description' => $permissionData['description'],
                ]
            );
        }

        // Criação dos cargos (roles)
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->permissions()->sync(Permission::all());

        $editorRole = Role::firstOrCreate(['name' => 'editor']);
        $editorRole->permissions()->sync(Permission::whereIn('name', ['create_posts', 'edit_posts'])->get());

        $viewerRole = Role::firstOrCreate(['name' => 'viewer']);
        $viewerRole->permissions()->sync(Permission::whereIn('name', ['view_posts'])->get());

        // Adiciona os nomes de exibição para os cargos (roles)
        $displayNameRoles = [
            'admin' => 'Administrator',
            'editor' => 'Editor',
            'viewer' => 'Viewer',
        ];

        foreach ($displayNameRoles as $roleName => $displayName) {
            Role::firstOrCreate(
                ['name' => $roleName], // Busca por nome do cargo
                [ // Dados adicionais a serem inseridos caso não exista
                    'display_name' => $displayName,
                    'description' => $displayName,
                ]
            );

        }
    }
}
