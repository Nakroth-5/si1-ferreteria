<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->insert([
            [
                'name' => 'view_products',
                'description' => 'Ver lista de productos',
                'module' => 'products',
                'action' => 'read',
                'is_active' => true,
            ],
            [
                'name' => 'create_products',
                'description' => 'Crear nuevos productos',
                'module' => 'products',
                'action' => 'create',
                'is_active' => true,
            ],
            [
                'name' => 'edit_products',
                'description' => 'Editar productos existentes',
                'module' => 'products',
                'action' => 'update',
                'is_active' => true,
            ],
            [
                'name' => 'delete_products',
                'description' => 'Eliminar productos',
                'module' => 'products',
                'action' => 'delete',
                'is_active' => true,
            ],
            [
                'name' => 'view_sales',
                'description' => 'Ver registros de ventas',
                'module' => 'sales',
                'action' => 'read',
                'is_active' => true,
            ],
            [
                'name' => 'create_sales',
                'description' => 'Procesar nuevas ventas',
                'module' => 'sales',
                'action' => 'create',
                'is_active' => true,
            ],
            [
                'name' => 'view_reports',
                'description' => 'Acceder a reportes',
                'module' => 'reports',
                'action' => 'read',
                'is_active' => true,
            ],
            [
                'name' => 'generate_reports',
                'description' => 'Generar nuevos reportes',
                'module' => 'reports',
                'action' => 'create',
                'is_active' => true,
            ],
            [
                'name' => 'manage_users',
                'description' => 'Gestionar usuarios del sistema',
                'module' => 'users',
                'action' => 'all',
                'is_active' => true,
            ],
            [
                'name' => 'view_inventory',
                'description' => 'Ver estado del inventario',
                'module' => 'inventory',
                'action' => 'read',
                'is_active' => true,
            ],
        ]);
    }
}
