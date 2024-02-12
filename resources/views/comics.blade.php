<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    @include('partials.jumbotron')
    <main>
        <div class="bg_black">
            <div class="container">
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <div class="my_card">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                                <div class="title">{{ $comic['series'] }}</div>
                            </div>
                        </div>
                    @endforeach
                    <button>LOAD MORE</button>
                </div>

            </div>
        </div>
    </main>
    <div class="bg_blue">
        <div class="container">
            <ul>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                            alt="digital-comics">
                        <span class="uppercase">
                            digital comics
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}"
                            alt="digital-comics">
                        <span class="uppercase">
                            dc merchandise
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}"
                            alt="digital-comics">
                        <span class="uppercase">
                            subscription
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}"
                            alt="digital-comics">
                        <span class="uppercase">
                            comic shop locator
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                            alt="digital-comics">
                        <span class="uppercase">
                            dc power visa
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @include('partials.footer')
</body>

</html>
