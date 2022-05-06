<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 50; $i++) {
            $customer = new Customer;
            // $customer->name = "Mansha Dahal";
            // $customer->address = "Bharatpur";
            // $customer->phonenumber = "9823456890";
            // $customer->dob = now();
            // $customer->password = "password";
            $customer->name = $faker->name;
            $customer->address = $faker->address;
            $customer->phonenumber = $faker->phonenumber;
            $customer->dob = $faker->date;
            $customer->password = $faker->password;
            $customer->save();
        }
    }
}
