<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Rol();
        $role->rol = 'guest';
        $role->desc = 'Guest';
        $role->save();
        $role = new Rol();
        $role->rol = 'user';
        $role->desc = 'User';
        $role->save();
        $role = new Rol();
        $role->rol = 'admin';
        $role->desc = 'Administrator';
        $role->save();
        $role = new Rol();
        $role->rol = 'editor';
        $role->desc = 'Editor';
        $role->save();
    }
}
