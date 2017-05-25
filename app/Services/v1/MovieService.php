<?php

namespace App\Services\v1;

use App\Movie;

class MovieService {
  public function getMovies() {
    return Movie::all();
  }
}
