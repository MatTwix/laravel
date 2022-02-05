<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $model = new Category();
        $categories = $model->getCategories();

        return view('layouts.categories.index', [
            'categories' => $categories
        ]);
    }

    public function show(int $id)
    {
        $newsModel = new News();
        $categoryModel = new Category();

        if ($id > 5) {
            abort(404);
        }

        $news = $newsModel->getNews();

        $newsResult = [];

        foreach ($news as $newsItem) {
            if ($newsItem->category_id == $id) {
                $newsResult[] = $newsItem;
            }
        }

        $categoryItem = $categoryModel->getCategoryById($id);

        return view('layouts.categories.show', [
            'categoryItem' => $categoryItem,
            'news' => $newsResult
        ]);
    }
}
