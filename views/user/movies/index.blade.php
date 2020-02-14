@extends('layouts.app')
# @Date:   2020-01-14T14:12:42+00:00
# @Last modified time: 2020-02-11T20:18:03+00:00




@section('content')

<div class="container">
  <h3>Trending Now!</h3>
  <div class="row">
    @foreach ($movies as $movie)
    <div class="col-md-3 col-sm-12">
        <img>{{ $movie->movie_img }}</img>
        <p>{{ $movie->title}}</p>
     </div>
     @endforeach
    </div>

    <div class="row">
      <div class="col-md-3">
        <h3>TOP BOX OFFICE</h3>
        </br>
          @foreach ($movies as $movie)
            <p>{{ $movie->title}}</p>
          @endforeach
      </div>

      <div class="col-md-9">
        <h3>LATEST RELEASES</h3>
        </br>
          @foreach ($movies as $movie)
            <p>{{ $movie->body}}</p>
          @endforeach
      </div>
    </div>

   </div>
@endsection
