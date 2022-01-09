<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews()
    {
        $faker = Factory::create();

        $news = [];

        for ($i = 0; $i, $i < 10; $i++) {
            $news = [
                'id' => $i,
                'title' => $faker->jobTitle(),
                'description' => $faker->text(250),
                'author' => $faker->userName()
            ];
        }

        return $news;
    }
}
