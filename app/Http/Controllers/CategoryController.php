<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = $this->getCategories();

        return view('layouts.categories.index', [
            'categories' => $categories
        ]);
    }

    public function show(int $id)
    {
        if ($id > 5) {
            abort(404);
        }

        $news = $this->getNews();

        $newsResult = [];

        foreach ($news as $newsItem) {
            if ($newsItem['category'] == $id) {
                $newsResult[] = $newsItem;
            }
        }

        $categoryItem = $this->getCategoryById($id);

        return view('layouts.categories.show', [
            'categoryItem' => $categoryItem,
            'news' => $newsResult
        ]);
    }
}
