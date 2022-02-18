<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Source extends Model
{
    use HasFactory;

    public static $availableFields = [
        'id', 'name'
    ];

    protected $table = 'sources';

    protected $fillable = [
        'name'
    ];
}
