<?php

use Illuminate\Database\Seeder;
use App\User;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = new SplFileObject('database/seeds/reviews.csv');
        $file->setFlags(SplFileObject::READ_CSV);

        $ary = array();
        foreach($file as $data) {
          array_push($ary, $data);
        }

        array_shift($ary);
        foreach($ary as $data) {
          User::create(
            array(
              'name' => $data[1],
              'email' => $data[2],
              'password' => $data[3],
              'remember_token' => $data[4],
              'created_at' => $data[5],
              'updated_at' => $data[6],
            )
          );
        }
    }
}