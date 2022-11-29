@extends('layouts.app')
@section('content')
 {{-- <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}

    <div class="container">

            <div class="col-md-12">

                <div class="card-body">
                    <div class="row">
                    @foreach ($units as $unit)
                        <div class="col-md-3">
                            <div class="alert alert-info" role="alert">
                                <p>{{$unit->unit_name}},{{$unit->unit_code}}</p>
                              </div>

                        </div>
                    @endforeach
                    </div>
                    {{$units->links()}}
                </div>
        </div>
    </div>


@endsection
