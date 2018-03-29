<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'phone' => str_random(11),
        //     'name' => str_random(10),
        //     'password' => bcrypt('secret'),
        // ]);
        //
        factory(App\User::class, 62)->create()->each(function ($u) {
            $u->contacts()->save(factory(App\Contact::class)->make());
        });

        // factory(App\User::class, 60)->create();
    }
}
