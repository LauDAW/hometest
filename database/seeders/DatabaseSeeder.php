<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            "name"  => "Administrador",
            "slug"  => "admin"
        ]);

        User::create([
            "name"      => "Squickers",
            "email"     => "squickers@testito.io",
            "password"  => Hash::make("llesi69"),
            "role_id"   => $role->id
        ]);
    }
}
