<div class="container">
    <div class="row p-5">
        @foreach ($comics as $comic)
            <div class="col-12 col-md-2 series">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
                <h5>{{ $comic['title'] }}</h5>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button class="btn btn-primary">LOAD MORE</button>
        </div>
    </div>
</div>
