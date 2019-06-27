<?php

use Illuminate\Database\Seeder;
use App\Review;

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
          Review::create(
            array(
              'id' => $data[0],
              'rate' => $data[1],
              'review' => $data[2],
              'user_id' => $data[3],
              'shop_id' => $data[4],
              'created_at' => $data[5],
              'updated_at' => $data[6],
              'images' => $data[7],
            )
          );
        }
    }
}