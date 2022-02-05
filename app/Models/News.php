<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    public function getNews(): array
    {
        return DB::select("SELECT id, category_id, title, author, status, description FROM {$this->table}");
    }

    public function getNewsById(int $id): array
    {
        return DB::select("SELECT id, title, author, status, description FROM {$this->table} WHERE id= :id", ['id' => $id]);
    }
}
