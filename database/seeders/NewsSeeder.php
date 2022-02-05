<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData(): array
    {
        $faker = Factory::create();
        $data = [];

        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'category_id' => ceil(($i + 1) / 4), //каждые 4 новости номер id категории уавеличивается на 1
                'title' => $faker->jobTitle(),
                'description' => $faker->text(250),
                'author' => $faker->userName(),
                'source_id' => ceil(($i + 1) / 2), //каждые 2 новости номер id источника уавеличивается на 1
            ];
        }

        return $data;
    }
}
