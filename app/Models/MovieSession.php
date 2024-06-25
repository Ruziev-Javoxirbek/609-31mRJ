<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieSession extends Model
{
    use HasFactory;

    protected $table = 'movie_sessions';

    protected $fillable = [
        'film_id',
        'hall_id',
        'start_time',
    ];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }
}
