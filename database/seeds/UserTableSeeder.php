<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
        // factory(App\User::class, 50)->create()->each(function ($u) {
        //     $u->posts()->save(factory(App\Post::class)->make());
        // });
    }
}
