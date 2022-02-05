<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Source extends Model
{
    use HasFactory;

    protected $table = 'sources';

    public function getSources(): array
    {
        return DB::select("SELECT id, name FROM {$this->table}");
    }

    public function getSourcesById(int $id): array
    {
        return DB::select("SELECT id, name FROM {$this->table} WHERE id= :id", ['id' => $id]);
    }
}
