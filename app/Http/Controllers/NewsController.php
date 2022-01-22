<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = $this->getNews();

        return view('layouts.news.index', [
            'news' => $news
        ]);
    }

    public function show(int $id)
    {
        if($id > 20) {
            abort(404);
        }
        $news = $this->getNewsById($id);

        return view('layouts.news.show', [
            'newsItem' => $news
        ]);
    }
}
