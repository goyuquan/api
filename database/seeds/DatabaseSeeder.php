<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     UsersTableSeeder::class,
        // ]);

        // factory(App\User::class, 50)->create()->each(function ($u) {
        //     $u->contacts()->save(factory(App\Contacts::class)->make());
        // });

        DB::table('users')->insert([
            'phone' => str_random(11),
            'password' => str_random(20),
            'name' => str_random(10),
        ]);
    }
}
