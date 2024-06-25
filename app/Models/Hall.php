<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $table = 'halls';

    protected $fillable = ['name'];

    public function sessions() {
        return $this->hasMany(MovieSession::class);
    }
}
