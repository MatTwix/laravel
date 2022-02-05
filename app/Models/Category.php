<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function getCategories(): array
    {
        return DB::select("SELECT id, name FROM {$this->table}");
    }

    public function getCategoryById(int $id): array
    {
        return DB::select("SELECT id, name FROM {$this->table} WHERE id= :id", ['id' => $id]);
    }
}
