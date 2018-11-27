<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'phone' => '0612345678',
                'adress_street' => $faker->word,
                'adress_nr' => $faker->randomDigit,
                'adress_zipcode' => '1234AB',
                'adress_city' => $faker->city,
                'pays_electricity' => $faker->numberBetween(0,1),
            ]);
        }
    }
}
