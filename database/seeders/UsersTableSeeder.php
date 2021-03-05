<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_editor = Rol::where('rol','editor')->first();
        $role_guest = Rol::where('rol','guest')->first();
        $role_admin= Rol::where('rol','admin')->first();
        $role_user = Rol::where('rol','user')->first();
        $user= new User();
        $user->name = 'Sousa';
        $user->email= 'oscar.sousa2001@gmail.com';
        $user->password=bcrypt('Sousa2001');
        $user->rol=4;
        $user->save();
        $user->roles()->attach($role_editor);
        $user= new User();
        $user->name = 'Admin';
        $user->email= 'admin@admin.com';
        $user->password=bcrypt('Sousa2001');
        $user->rol=3;
        $user->save();
        $user->roles()->attach($role_admin);
        $user= new User();
        $user->name = 'Carlos';
        $user->email= 'Carlos@Carlos.com';
        $user->password=bcrypt('Sousa2001');
        $user->rol=2;
        $user->save();
        $user->roles()->attach($role_user);
    }
}
