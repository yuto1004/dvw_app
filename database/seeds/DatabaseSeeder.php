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
              'id' => $data[0],
              'shop_name' => $data[1],
              'genre' => $data[2],
              'link' => $data[3],
              'created_at' => $data[4],
              'updated_at' => $data[5],
              'address' => $data[6],
              'avatar' => $data[7],
            )
          );
        }
       
        // $this->call(UsersTableSeeder::class);
    }
}
