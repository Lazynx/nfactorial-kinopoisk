<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchLater extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id', 'movie_id', 'name_ru', 'name_original', 'country', 'genre', 'year', 'rating_kinopoisk', 'poster_url_preview'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
