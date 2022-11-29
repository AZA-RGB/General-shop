@extends('layouts.app')
@section('content')
 {{-- <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}

    <div class="container">

            <div class="col-md-12">

                <div class="card-body">
                    <div class="row">
                    @foreach ($countries as $country)
                        <div class="col-md-2">
                            <div class="alert alert-info" role="alert">
                                <p>{{$country->name}}</p>
                                <p>{{$country->capital}}</p>
                                <p>{{$country->region}}</p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    {{$countries->links()}}
                </div>
        </div>
    </div>


@endsection
