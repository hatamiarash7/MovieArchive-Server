<?php

namespace App\Services\v1;

use App\Movie;

class MovieService {
  public function getMovies() {
    return $this->filterMovies(Movie::all());
  }

  public function getMovie($id) {
    return $this->filterMovies(Movie::where('id', $id)->get());
  }

  protected function filterMovies($movies){
    $data = [];

    foreach ($movies as $movie) {
      $entry = [
        'name'=> $movie->name,
        'description'=> $movie->description,
        'year'=> $movie->year,
        'point'=> $movie->point,
        'country'=> $movie->country,
        'language'=> $movie->language,
        'age'=> $movie->age,
        'length'=> $movie->length,
        'release_at'=> $movie->release_at,
        'directors'=> $movie->directors,
        'writers'=> $movie->writers,
        'href'=>route('movies.show', ['id' => $movie->id])
      ];

      $data[] = $entry;
    }
    return $data;
  }
}
