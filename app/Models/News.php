<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    public static $availableFields = [
        'id', 'category_id', 'title', 'author', 'status', 'description', 'source_id'
    ];

    public static $joinAvailableFields = [
        'news.id',
        'news.category_id',
        'news.title',
        'news.author',
        'news.status',
        'news.description',
        'sources.name AS source_name',
        'categories.name AS category_name'
    ];

    protected $table = 'news';

    protected $fillable = [
        'title',
        'author',
        'status',
        'description',
        'category_id',
        'source_id'
    ];
}
