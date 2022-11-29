@extends('layouts.app')
@section('content')
 {{-- <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}

    <div class="container">

            <div class="col-md-12">

                <div class="card-body">
                    <div class="row">
                    @foreach ($reviews as $review)
                        <div class="col-md-12">
                            <div class="alert alert-info" role="alert">
                                <p>{{$review->review}}</p>
                                <p>user: {{$review->user->first_name}}</p>
                                <p>stars:
                                    @php
                                        $currentstars= $review->stars;
                                        $remainingstars= 5-$currentstars;
                                    @endphp
                                    @for ($i=0; $i<$currentstars; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                    @for ($i=0; $i<$remainingstars; $i++)
                                        <i class="far fa-star"></i>
                                    @endfor
                                </p>
                                <p>Since: {{$review->humanFormatedDate() }}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    {{$reviews->links()}}
                </div>
        </div>
    </div>


@endsection
