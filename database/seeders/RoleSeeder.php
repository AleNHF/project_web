<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrativo = Role::create(['name' => 'administrativo']);
        $estudiante = Role::create(['name' => 'estudiante']);
        $docente = Role::create(['name' => 'docente']);

        Permission::create(['name' => 'home'])->assignRole($administrativo);
        Permission::create(['name' => 'game'])->assignRole($estudiante);

        Permission::create(['name' => 'users.index'])->assignRole($administrativo);
        Permission::create(['name' => 'users.create'])->assignRole($administrativo);
        Permission::create(['name' => 'users.edit'])->assignRole($administrativo);
        Permission::create(['name' => 'users.destroy'])->assignRole($administrativo);

        Permission::create(['name' => 'estudiantes.index'])->assignRole($administrativo);
        Permission::create(['name' => 'estudiantes.create'])->assignRole($administrativo);
        Permission::create(['name' => 'estudiantes.edit'])->assignRole($administrativo);
        Permission::create(['name' => 'estudiantes.destroy'])->assignRole($administrativo);

        Permission::create(['name' => 'administrativos.index'])->assignRole($administrativo);
        Permission::create(['name' => 'administrativos.create'])->assignRole($administrativo);
        Permission::create(['name' => 'administrativos.edit'])->assignRole($administrativo);
        Permission::create(['name' => 'administrativos.destroy'])->assignRole($administrativo);

        Permission::create(['name' => 'docentes.index'])->assignRole($administrativo);
        Permission::create(['name' => 'docentes.create'])->assignRole($administrativo);
        Permission::create(['name' => 'docentes.edit'])->assignRole($administrativo);
        Permission::create(['name' => 'docentes.destroy'])->assignRole($administrativo);

        Permission::create(['name' => 'preguntas.index'])->syncRoles([$administrativo,$docente]);
        Permission::create(['name' => 'preguntas.create'])->syncRoles([$administrativo,$docente]);;
        Permission::create(['name' => 'preguntas.edit'])->syncRoles([$administrativo,$docente]);;
        Permission::create(['name' => 'preguntas.destroy'])->syncRoles([$administrativo,$docente]);;


    }
}
