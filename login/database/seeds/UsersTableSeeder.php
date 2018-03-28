<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder{

  public function run()
  {
    $faker = Faker\Factory::create();

    for($i=0; $i<10; $i++)
    {
      $user = User::create(array(
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'username' => $faker->unique->userName,
        'password' => $faker->word,
        'remember_token' =>str_random(5),
      ));
    }
  }
}
