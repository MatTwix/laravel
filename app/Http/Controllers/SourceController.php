<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    public function index()
    {
        $sources = Source::query()->select(
            Source::$availableFields
        )->get();

        return view('layouts.sources.index', [
            'sources' => $sources
        ]);
    }

    public function show(Source $source)
    {
        $news = News::query()->select(
            News::$availableFields
        )->where(
            'source_id', $source->id
        )->get();

        return view('layouts.sources.show', [
            'news' => $news,
            'source' => $source
        ]);
    }
}
