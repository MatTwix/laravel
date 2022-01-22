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

    public function getNews(): array
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            $news[] = [
                'id' => $i,
                'category' => ceil($i * 2.5 / 10), //каждые 4 новости номер id категории уавеличивается на 1
                'title' => $faker->jobTitle(),
                'description' => $faker->text(250),
                'author' => $faker->userName()
            ];
        }

        return $news;
    }

    public function getCategories(): array
    {
        $faker = Factory::create();

        $categories = [];

        for ($i = 1; $i <= 5; $i++) {
            $categories[] = [
                'id' => $i,
                'name' => $faker->dayOfWeek
            ];
        }

        return $categories;
    }

    public function getNewsById(int $id): array
    {
        $faker = Factory::create();

        return [
            'id' => $id,
            'category' => floor($id * 2.5 / 10),
            'title' => $faker->jobTitle(),
            'description' => $faker->text(250),
            'author' => $faker->userName()
        ];
    }

    public function getCategoryById(int $id): array
    {
        $faker = Factory::create();

        return [
            'id' => $id,
            'name' => $faker->dayOfWeek
        ];
    }
}
