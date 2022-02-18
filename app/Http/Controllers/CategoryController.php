<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::query()->select(
            Category::$availableFields
        )->get();

        return view('layouts.categories.index', [
            'categories' => $categories
        ]);
    }

    public function show(Category $category)
    {
        $news = News::query()->select(
            News::$availableFields
        )->where(
            'category_id', $category->id
        )->get();

        return view('layouts.categories.show', [
            'category' => $category,
            'news' => $news
        ]);
    }
}
