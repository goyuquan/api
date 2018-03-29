<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactsTableSeeder extends Seeder
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
        //     $u->contacts()->save(factory(App\Contacts::class)->make());
        // });

        factory(Contact::class, 60)->create();
    }
}
