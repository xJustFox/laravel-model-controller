@extends('layout.app')

@section('content')
    <div class="container-lg py-5 ">
        <div class="row justify-content-center ">
            @foreach ($movies as $movie)
                <div class="col-3 my-3 ">
                    <div class="my-card">
                        <div>{{ $movie->title }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
