<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = $this->getNews();

        return view('news.index');
    }

    public function show(int $id)
    {

    }
}
