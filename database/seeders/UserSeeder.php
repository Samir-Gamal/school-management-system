<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('123456789');

        $admin_user = User::factory()->make([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => $password

        ]);

        $more_admin_user = User::factory()->count(10)->make([
            'password' => $password
        ]);

        $more_admin_user->push($admin_user);

        DB::table('users')->insert($more_admin_user->toArray());
    }
}
