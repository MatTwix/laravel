<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert($this->getData());
    }

    private function getData():array
    {
        $faker = Factory::create();
        $data = [];

        for ($i = 0; $i < 10; $i++)
        {
            $data[] = [
                'name' => $faker->city()
            ];
        }

        return $data;
    }
}
