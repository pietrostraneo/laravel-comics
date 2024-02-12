<header>

    <div class="header-top">
        <div class="container">
            <div class="row p-1">
                <div class="col-12 d-flex justify-content-end gap-2">
                    <a href="/">DC POWER VISA</a>
                    <a href="/">ADDITIONAL SITE</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row p-3">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo" class="img-fluid">
                </div>
                <nav>
                    <ul class="d-flex list-unstyled gap-3">
                        @foreach ($links as $item)
                            <li>{{ $item['label'] }}</li>
                        @endforeach
                    </ul>
                </nav>
                <div class="input">
                    <input type="text" name="search" id="search" placeholder="Search">
                </div>
            </div>
        </div>
    </div>
</header>
