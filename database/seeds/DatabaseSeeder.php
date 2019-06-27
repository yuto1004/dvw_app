<?php

use Illuminate\Database\Seeder;
use App\Shop;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = new SplFileObject('database/seeds/shops.csv');
        $file->setFlags(SplFileObject::READ_CSV);

        $ary = array();
        foreach($file as $data) {
          array_push($ary, $data);
        }

        array_shift($ary);
        foreach($ary as $data) {
          Shop::create(
            array(
              'shop_name' => $data[1],
              'genre' => $data[2],
              'link' => $data[3],
              'address' => $data[4],
              'avatar' => $data[5],
            )
          );
        }
       
        // $this->call(UsersTableSeeder::class);
    }
}
