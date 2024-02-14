@extends('layout.app')

@section('content')
    <div class="container-lg py-5 vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-5">
                <div class=" my-show-card">
                    <a href="{{route('home')}}" class="my-back btn btn-sm btn-primary">Back</a>
                    <ul class=" list-unstyled ">
                        <li>Title: {{$movie->title}}</li>
                        <li>Original Title: {{$movie->original_title}}</li>
                        <li>Nationality: {{$movie->nationality}}</li>
                        <li>Release: {{$movie->date}}</li>
                        <li>Vote: {{$movie->vote}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
