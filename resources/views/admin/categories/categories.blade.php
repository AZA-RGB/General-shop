@extends('layouts.app')
@section('content')
 <!-- CSS only -->
 {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}

    <div class="container">
        {{-- <div class="row"> --}}
            <div class="col-md-12">

                <div class="card-body">
                    <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-md-3">
                            <div class="alert alert-info" role="alert">
                                <p>{{$category->name}}</p>
                              </div>

                        </div>
                    @endforeach
                    </div>
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>


@endsection
