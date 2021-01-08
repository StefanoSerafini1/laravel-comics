@extends('layout.main')

@section('contenuto')

   <main class="generalContainer">
        <section class="containerHeader">
            <img src="{{ asset('images/cover-home.jpg')}}" alt="">
        </section>
        <section class="comics">
            <div class="containerCard">
                <ul class="comicList">
                    @foreach ($comics as $comic)
                    <li class="lista">
                        <a href="{{ route('comic-detail', $comic['id']) }}">
                            <img src="{{ $comic['image']}}" alt="">
                            <h3>
                                {{ $comic['title']}}
                            </h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="button">
                <a>LOAD MORE</a>
            </div>
        </section>
        <div class="lista merch">
            <ul>
                <li>
                    <img src="{{ asset('images/digital-comics.png')}}" alt="">
                    <h2>DIGITAL COMICS</h2>
                </li>
                <li>
                    <img src="{{ asset('images/merchandise.png')}}" alt="">
                    <h2>DC MERCHANDISE</h2>
                </li>
                <li>
                    <img src="{{ asset('images/subscriptions.png')}}" alt="">
                    <h2>SUBSCRIPTION</h2>
                </li>
                <li>
                    <img src="{{ asset('images/locator.png')}}" alt="">
                    <h2>COMIC SHOP LOCATOR</h2>
                </li>
                <li>
                    <img src="{{ asset('images/power-visa.svg')}}" alt="">
                    <h2>DC POWER VISA</h2>
                </li>

            </ul>
        </div>
   </main>

@endsection