<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::query()->select(
            News::$availableFields
        )->get();

        return view('layouts.news.index', [
            'newsList' => $news
        ]);
    }

    public function show(int $id)
    {
        $news = News::query()->leftJoin(
            'sources', 'news.source_id', '=', 'sources.id'
        )->leftJoin(
            'categories', 'news.category_id', '=', 'categories.id'
        )->select(
            News::$joinAvailableFields
        )->where(
            'news.id', $id
        )->first();

        return view('layouts.news.show', [
            'news' => $news
        ]);
    }
}
