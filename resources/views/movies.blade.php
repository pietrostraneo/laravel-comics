@extends('layout.app')

@section('content')
    <div class="jumbo">
        <h5>Movies</h5>
    </div>
    <div class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Movies are not available :(</h1>
                    <button class="btn btn-primary mt-4">Notify Me!</button>
                </div>
            </div>
        </div>
    </div>
    @include('partials.banner')
@endsection
