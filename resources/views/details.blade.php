@extends('layout.app')

@section('content')
    <div class="jumbo">
        <img src="{{ $comic['thumb'] }}" alt="">
    </div>
    <div class="blueline"></div>

    <div class="top-content">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h2>{{ $comic['title'] }}</h2>
                    <div class="price mt-3 d-flex justify-content-between">
                        <p>U.S. Price: <span class="text-white">{{ $comic['price'] }}</span></p>
                        <div class="available d-flex gap-3">
                            <p>AVAILABLE</p>
                            <p class="text-white">Check Availability</p>
                        </div>
                    </div>
                    <div class="description mt-3">
                        <p>{{ $comic['description'] }}</p>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <h5>ADVERTISEMENT</h5>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-content">
        <div class="container-fluid">
            <div class="row p-5">

                <div class="col-6">
                    <h5>Talent</h5>
                    <div class="d-flex justify-content-between border-top mt-3">
                        <p>Art by:</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui a quae excepturi minima magnam quasi
                            deleniti. Quas iusto eos inventore, laborum at, error beatae, totam velit harum voluptate dolor
                            nam.</p>
                    </div>
                    <div class="d-flex justify-content-between border-top border-bottom">
                        <p>Written by:</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus rerum, ducimus eligendi
                            aliquid asperiores tempora ut eos expedita? Possimus laudantium iste amet maiores voluptatem
                            explicabo quis deleniti porro fugiat itaque.</p>
                    </div>
                </div>

                <div class="col-6 justify-content-center">
                    <h5>Specs</h5>
                    <div class="d-flex justify-content-between border-top mt-3">
                        <p>Series:</p>
                        <p>{{ $comic['series'] }}</p>
                    </div>
                    <div class="d-flex justify-content-between border-top">
                        <p>U.S. Price:</p>
                        <p>{{ $comic['price'] }}</p>
                    </div>
                    <div class="d-flex justify-content-between border-top border-bottom">
                        <p>On Sale Date:</p>
                        <p>{{ $comic['sale_date'] }}</p>
                    </div>
                </div>

            </div>

            <div class="row d-flex justify-content-center align-items-end">
                <div class="detail-banner d-flex justify-content-center">
                    @foreach ($banner as $item)
                        <div class="col-2 d-flex align-items-center gap-1 single-banner justify-content-center">
                            <span>{{ $item['text'] }}</span>
                            <img src="{{ Vite::asset($item['img']) }}" alt="{{ $item['text'] }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
