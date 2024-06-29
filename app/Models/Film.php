<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';

    protected $fillable = ['name', 'duration', 'genre', 'price']; // Добавлен массив fillable

    public function sessions()
    {
        return $this->hasMany(MovieSession::class);
    }
}
