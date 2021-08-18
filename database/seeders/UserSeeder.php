<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

\Illuminate\Support\Facades\Log::alert($more_admin_user);
//        DB::table('users')->insert([
//            'name' => 'admin',
//            'email' => 'admin@admin.com',
//            'password' => Hash::make('123456789'),
//        ]);
    }
}
